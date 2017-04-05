<?php
Class Upload_lib
{
    var $CI = '';

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function upload_img()
    {
        if($this->input->post("ok"))
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '900';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $this->load->library("upload", $config);
            if($this->upload->upload_img("img"))
            {
                echo 'Upload successful';
                    $check = $this->upload->data();
                    echo "<pre>";
                    print_r($check);
                    echo "<pre>";
                    $this->load->library("image_lib");
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/'.$check['file_name'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 150;
                    $config['height'] = 120;
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
            }else{
                $data['error'] = $this->upload->display_errors();
                $this->load->view('form_uplaod', $data);
            }
        }
    }
}
?>