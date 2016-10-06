      if (strlen(trim($data))) {
            print htmlentities(trim($data));
        } else {
            print "\n" . str_repeat(' ',$this->level);
        }
