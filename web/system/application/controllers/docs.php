<?php

class Docs extends Controller
{
  function Docs()
  {
    parent::Controller();
  }

  function index()
  {
    $this->load->library ('Textile');
    $docpage = $this->uri->rsegment(3);
    if (empty($docpage)) $docpage = "install";
    $textile = $this->load->view ("text/$docpage", NULL, True);
    $html = $this->textile->TextileThis ($textile);
    $layout['title'] = $docpage;
    $layout['body'] = $html;
    $this->load->view ('docs', $layout);
  }
}

?>
