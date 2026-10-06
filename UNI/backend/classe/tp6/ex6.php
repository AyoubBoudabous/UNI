<?php
require 'ex5.php';

class form2 extends form {
    public function setradio($name, $value, $checked = false) {
        $checkedAttr = "";

        if ($checked == true) {
            $checkedAttr = " checked";
        } else {
            $checkedAttr = "";
        }

        $this->formCode .= "<input type=\"radio\" name=\"$name\" value=\"$value\"$checkedAttr> $value\n";
    }

    public function setcheckbox($name, $value, $checked = false) {
        $checkedAttr = "";

        if ($checked == true) {
            $checkedAttr = " checked";
        } else {
            $checkedAttr = "";
        }

        $this->formCode .= "<input type=\"checkbox\" name=\"$name\" value=\"$value\"$checkedAttr> $value\n";
    }
}

$form2 = new form2();
$form2->setradio("sexe", "Homme", true);
$form2->setradio("sexe", "Femme");
$form2->setcheckbox("langages", "PHP", true);
$form2->setcheckbox("langages", "JavaScript");
$form2->setsubmit("Valider", "ok", "");

echo $form2->getform();
?>
