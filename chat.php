<style>
    .chat-content{
        height:800px;
        background-color: #2C3E50 !important;
    }
    .user{
        height:800px;
        background-color: #2C3E50 !important;
    }
    .content{
        height:800px;
        padding-left:0 !important;
        padding-right:0 !important;
        background-color: #d2d4d8 !important;
    }


    #contacts {
    height: 700px;
    margin-top:10px;
    overflow-y: scroll;
    overflow-x: hidden;
    color:#FFFFFF;
    }
    @media screen and (max-width: 735px) {
    #contacts {
        height: calc(100% - 149px);
        overflow-y: scroll;
        overflow-x: hidden;
    }
    #contacts::-webkit-scrollbar {
        display: none;
    }
    }
    #contacts.expanded {
    height: calc(100% - 334px);
    }
    #contacts::-webkit-scrollbar {
    width: 8px;
    background: #2c3e50;
    }
    #contacts::-webkit-scrollbar-thumb {
    background-color: #243140;
    }
    /* #contact ul{
        list-style-type: none;
    } */
    #contacts ul li.contact {
    position: relative;
    padding: 10px 0 15px 0;
    font-size: 0.9em;
    cursor: pointer;
    }
    @media screen and (max-width: 735px) {
    #contacts ul li.contact {
        padding: 6px 0 46px 8px;
    }
    }
    #contacts ul li.contact:hover {
    background: #32465a;
    }
    #contacts ul li.contact.active {
    background: #32465a;
    border-right: 5px solid #435f7a;
    }
    #contacts ul li.contact.active span.contact-status {
    border: 2px solid #32465a !important;
    }
    #contacts ul li.contact .wrap {
    width: 88%;
    margin: 0 auto;
    position: relative;
    }
    @media screen and (max-width: 735px) {
    #contacts ul li.contact .wrap {
        width: 100%;
    }
    }
    #contacts ul li.contact .wrap span {
    position: absolute;
    left: 0;
    margin: -2px 0 0 -2px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid #2c3e50;
    background: #95a5a6;
    }
    #contacts ul li.contact .wrap span.online {
    background: #2ecc71;
    }
    #contacts ul li.contact .wrap span.away {
    background: #f1c40f;
    }
    #contacts ul li.contact .wrap span.busy {
    background: #e74c3c;
    }
    #contacts ul li.contact .wrap img {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
    }
    @media screen and (max-width: 735px) {
    #contacts ul li.contact .wrap img {
        margin-right: 0px;
    }
    }
    #contacts ul li.contact .wrap .meta {
    padding: 5px 0 0 0;
    }
    @media screen and (max-width: 735px) {
    #contacts ul li.contact .wrap .meta {
        display: none;
    }
    }
    #contacts ul li.contact .wrap .meta .name {
    font-weight: 600;
    }
    #contacts ul li.contact .wrap .meta .preview {
    margin: 5px 0 0 0;
    padding: 0 0 1px;
    font-weight: 400;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -moz-transition: 1s all ease;
    -o-transition: 1s all ease;
    -webkit-transition: 1s all ease;
    transition: 1s all ease;
    }
    #contacts ul li.contact .wrap .meta .preview span {
    position: initial;
    border-radius: initial;
    background: none;
    border: none;
    padding: 0 2px 0 0;
    margin: 0 0 0 1px;
    opacity: .5;
    }

    .content .contact-profile {
    width: 100%;
    height: 60px;
    line-height: 60px;
    background: #f5f5f5;
    }
    .content .contact-profile img {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin: 9px 12px 0 9px;
    }
    .content .contact-profile p {
    float: left;
    }
    .content .contact-profile .social-media {
    float: right;
    }
    .content .contact-profile .social-media i {
    margin-left: 14px;
    cursor: pointer;
    }
    .content .contact-profile .social-media i:nth-last-child(1) {
    margin-right: 20px;
    }
    .content .contact-profile .social-media i:hover {
    color: #435f7a;
    }
    

    .content .messages {
    height:650px;
    width:100%;
    overflow-y: scroll;
    overflow-x: hidden;
    }
    @media screen and (max-width: 735px) {
     .content .messages {
        max-height: calc(100% - 105px);
    }
    }
     .content .messages::-webkit-scrollbar {
    width: 8px;
    background: transparent;
    }
     .content .messages::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
    }
     .content .messages ul li {
    display: inline-block;
    clear: both;
    float: left;
    margin: 15px 15px 5px 15px;
    width: calc(100% - 25px);
    font-size: 0.9em;
    }
     .content .messages ul li:nth-last-child(1) {
    margin-bottom: 20px;
    }
     .content .messages ul li.from img {
    margin: 6px 8px 0 0;
    }
     .content .messages ul li.from p {
    background: #435f7a;
    color: #f5f5f5;
    }
     .content .messages ul li.to img {
    float: right;
    margin: 6px 0 0 8px;
    }
     .content .messages ul li.to p {
    background: #f5f5f5;
    float: right;
    }
     .content .messages ul li img {
    width: 22px;
    border-radius: 50%;
    float: left;
    }
     .content .messages ul li p {
    display: inline-block;
    padding: 10px 15px;
    border-radius: 20px;
    max-width: 205px;
    line-height: 130%;
    }
    @media screen and (min-width: 735px) {
     .content .messages ul li p {
        max-width: 300px;
    }
    }

    .content .message-input {
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 99;
    }
    .content .message-input .wrap {
    position: relative;
    }
    .content .message-input .wrap input {
    font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
    float: left;
    border: none;
    width: 95%;
    padding: 11px 32px 10px 8px;
    font-size: 0.8em;
    color: #32465a;
    }

    .submit{
        width: 5%;
    }


</style>
<div class="chat-content">
    <div class="row">
        <div class="col col-lg-3 user">
            <div id="contacts">
                <ul class="list-unstyled">
                    <li class="contact">
                        <div class="wrap">
                            <img src="img/kingz.jpg" alt="" width="40" height="40">
                            <div class="meta">
                                <p class="name">KinGz</p>
                                <p class="preview">Test Message</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact active">
                        <div class="wrap">
                            <img src="img/rin.jpg" alt="" width="40" height="40">        
                            <div class="meta">
                                <p class="name">Apinya</p>
                                <p class="preview">ฮัลโหลวว</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col col-lg-9 content">
            <div class="contact-profile">
                <img src="img/rin.jpg" alt="" width="40" height="40">   
                <p>Apinya</p>
            </div>

            <div class="messages">
                <ul>
                    <li class="from">
                        <img src="img/rin.jpg" alt="" width="22" height="22">  
                        <p>ฮัลโหลวว</p>
                    </li>
                    <li class="to">
                        <img src="img/botsfloor.png" alt="" width="22" height="22">
                        <p>สวัสดีจ้า ยินดีต้อนรับ</p>
                    </li>
                </ul>
            </div>
            <div class="message-input">
                <div class="wrap">
                    <input type="text" placeholder="พิพม์ช้อความ..." />
                    <button class="btn btn-info submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".messages").animate({ scrollTop: $(document).height() }, "slow");
});
</script>