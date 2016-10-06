$dispatch_map = array('stooges.pickOne' =>
                      array('function' => 'pick_a_stooge'),
                      'stooges.listAll' =>
                      array('function' => 'list_all_stooges'),
                      'stooges.pickThis' =>
                      array('function' => 'pick_this_stooge',
                            'signature' => array(array('string','int')))); 
