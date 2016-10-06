$form = new HTML_QuickForm('uploader');

// File upload needs an element of type "file"
$form->addElement('file','uploaded_file','Your File:');

// We want files of 128kbytes or less
$max_size = 131072;

// Make sure that a file is uploaded
$form->addRule('uploaded_file','Please upload a file','uploadedfile');

// Have HTML_QuickForm test, after the file is uploaded, that it is
// less than 128k
$form->addRule('uploaded_file','Your file is too big','maxfilesize',$max_size);
$form->addElement('submit','save','Send It');

// Tell well-behaved browsers not to allow upload of a file larger than
// 128k
$form->setMaxFileSize(131072);

// Display or process the form
if ($form->validate()) {
    $form->process('move_file');
} else {
    $form->display();
}

function move_file($data) {
    global $form;

    // Remove backslashes and forward slashes from new filename
    $new_name = strtr($data['uploaded_file']['name'],'/\\','');
    // Remove ".." from new filename
    $new_name = str_replace('..','',$new_name);

    $file =& $form->getElement('uploaded_file');
    if ($file->moveUploadedFile('/tmp',$new_name)) {
        print "The file has been uploaded to /tmp/$new_name.";
    } else {
        print "The file could not be uploaded to /tmp/$new_name.";
    }
}
