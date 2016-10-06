$form->addGroupRule('name',
                    array(array(array('Invalid First Name', 'minlength',3)),
                          array(array('Invalid Middle Name','minlength',3)),
                          array(array('Last Name is required','required'),
                                array('Invalid Last Name','maxlength',20))));
