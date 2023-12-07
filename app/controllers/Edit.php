<?php
class Edit extends Controller
{
    public function index()
    {
        $data['content'] = '';
        $data['component'] = 'admin/sua';
        $this->render('layouts/admin', $data);
    }
}
