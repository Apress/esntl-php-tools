$message = new XML_RPC_Message('shopping.purchase',
                               array(new XML_RPC_Value(5, 'int'),
                                     new XML_RPC_Value('PHP Gems', 'string')));
