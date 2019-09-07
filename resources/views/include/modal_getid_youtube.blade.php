<style>
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 30px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    border: 1px solid #888;
    width: 60%;
    border-radius: 5px;
}

.modal-footer {
    border-top: 1px solid #cec9c9;
    text-align: right;
    width: 100%;
    padding: 10px;
}

.modal-header {
    border-bottom: 1px solid #cec9c9;
    width: 100%;
    padding: 10px;
}

.modal-header h2 {
    font-size: 1.2rem;
    font-weight: 600;
}

.modal-body {
    width: 100%;
    padding: 10px;
}

.modal-body .name-posts{
  font-weight: 600;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 20px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;

}

#modal_getid_yotube img{
    width:100%;
}
</style>

<div class="modal fade" id="modal_getid_yotube" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span type="button" class="close" data-dismiss="modal" aria-hidden="true">×</span>
                <h2 class="modal-title">Hướng dẫn lấy ID của video youtube</h2>
            </div>
            <div class="modal-body">
                <img src="img/get_id/get_id.jpg">
            </div>
        </div>
    </div>
</div>