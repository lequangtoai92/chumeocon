<style>
.content-alert {
    width: 100%;
    text-align: right;
}

.alert {
    padding: 10px;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
    z-index: 10;
    position: absolute;
    border-radius: 4px;
    height: 40px;
}

.alert.success {
    background-color: #4CAF50;
}

.alert.info {
    background-color: #2196F3;
}

.alert.warning {
    background-color: #ff9800;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>Tạo bài thành công và đang chờ xét duyệt</strong>.
</div>