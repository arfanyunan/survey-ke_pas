<?php 
    /* cek status login meliputi session dan hak akses pengguna */
    function status_log()
    {
        /* this menjadi variabel app dari struktur CI */
        $app = get_instance();
        if (!$app->session->userdata('status_login')) {
            # if user not login, kick out
            $app->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Silahkan Login !!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth');
        }else{
            /* next develop tambahkan menu yang dibolehkan untuk diakses */
        }
    }
?>