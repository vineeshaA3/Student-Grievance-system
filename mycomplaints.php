<?php include 'header.php'; ?>

<style>
    h1 {
        font-weight: 600;
        font-size: 24px;
    }


    .messageBox {
        background-color: white;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: calc(var(--chatboxH) + 5px);
        display: flex;
        align-items: center;
        padding: 7px 27px;
    }



    .chatArea {
        height: calc(100vh - var(--chatboxH));
        width: 100%;
        padding: 16px;
        overflow-y: scroll;
    }

    .prof {
        min-width: 35px;
        min-height: 35px;
        margin: auto 10px 0 10px;
        background: black;
        color: white;
        font-weight: 700;
        text-align: center;
        border-radius: 2rem;
        display: flex;
        align-items: start;
        justify-content: center;
    }

    .messArea {
        display: grid;
        grid-row-gap: 10px;
        font-size: 14px;
    }



    .message {
        display: flex;
        width: fit-content;
        max-width: 40rem;
        margin-bottom: 35px;
    }

    .otherM {
        margin-right: auto;
    }

    .mMess {
        margin-left: auto;
        overflow: hidden;
    }

    .mMess .messArea .textM {
        background-color: blue;
        color: white;
        margin-left: auto;
        transition: .6s cubic-bezier(.07, .76, .13, 1.02);
    }

    .newMmess {
        transform: translateY(100px) scale(3);
    }

    .otherM .messArea .textM {
        background-color: grey;
    }

    .mMess .messArea .textM a {
        color: grey;
    }

    .messArea .textM a {
        font-weight: 500;
    }

    .message .textM {
        width: fit-content;
        border-radius: 10px;
        padding: 10px;
        -webkit-box-shadow: 0px 5px 8px 5px rgba(0, 0, 0, 0.03);
        box-shadow: 0px 5px 8px 5px rgba(0, 0, 0, 0.03);
        font-size: 17px;
    }

    .welcomeMess {
        text-align: center;
        margin-top: var(--headerH);
    }

    .welcomeMess h1 {
        font-weight: 600;
        font-size: 24px;
    }

    .mainChater {
        box-shadow: 5px 10px 5px 12px black;

        width: 700px;
    }
</style>



<body>
    <div class="container" style="background-color: white; ">

        <!-- <div class="errorsSide">
        </div> -->
        <!-- <div class="shareLink">
            <div class="welcomeMess" style="margin-top: 0;">
                <div class="img"><video src="https://res.cloudinary.com/duw2s4w0s/video/upload/v1620962563/HO%20TV%20assets/ezgif-6-38fc0e6aefa8_owq33f.mp4" alt="brainstorm video" autoplay muted></video></div>
                <h1 class="roomTitle" class="roomTitle">Error Pharsing</h1>
                <p id="copyLinker2" class="copyLinker2">#4987720</p>
            </div>
            <input id="copyvalue" type="text" value="#4987720">
            <button id="copyLinker">Copy Code</button>
        </div> -->

        <div class="mainChater">
            <!-- <div class="headerDet">
                <div class="chatDety">
                    <div class="img"><video src="https://res.cloudinary.com/duw2s4w0s/video/upload/v1620962563/HO%20TV%20assets/ezgif-6-38fc0e6aefa8_owq33f.mp4" alt="brainstorm video" autoplay></video></div>
                    <div class="nameC">
                        <p class="roomTitle" id='titleFirst' class="roomTitle">Error Pharsing</p>
                        <input type="text" name="room name" id="roomNameInput" class="roomTitle" value="Its BrainStorming">
                    </div>
                </div>

                <div class="tools">
                    <button id="groupEdit" tooltip="Google Meet" flow="left"><span class="material-icons blueClick">mode_edit</span></button>
                    <button id="settings" tooltip="Room Settings" flow="left"><span class="material-icons blueClick">settings</span></button>
                </div>
            </div> -->

            <div class="chatArea changeW">

                <?php

                $compsql = mysqli_query($conn, "SELECT `users`.*, `complaints`.* FROM `users` JOIN `complaints` ON `users`.`id` = `complaints`.`user_id` where `users`.`id`='" . $_SESSION['uid'] . "'");
                $i = 0;

                while ($comp_row = mysqli_fetch_array($compsql)) {
                    $i++;

                ?>

                    <div class="chatMessages">
                        <!--Start of Chat cont-->
                        <?php if ($i == "1") { ?>
                            <div class="welcomeMess">
                                <h1 class="roomTitle">hi <span><?php echo $comp_row['name']; ?></span>!
                                </h1>
                            </div><?php } ?>

                        <div class="message">
                            <div class="prof">
                                <p>Q<?php echo $i ?></p>
                            </div>
                            <div class="messArea">
                                <p id="sname">user...</p>
                                <div class="textM">
                                    <p><?php echo $comp_row['complaint']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="message mMess 1122334" data-number="1122334">
                            <div class="messArea">
                                <p id="sname">admin....</p>
                                <div class="textM">
                                    <p><?php echo $comp_row['reply']; ?></p>
                                </div>
                            </div>
                            <div class="prof" style="background-color: #ff7b54;">
                                <p>A<?php echo $i ?></p>
                            </div>
                        </div>
                        <hr>


                        <!-- <div class="message">
                        <div class="prof" style="background-color: #ffb26b;">
                            <p>A</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">Alexandria Patkinson</p>
                            <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                    </div>

                    <div class="message">
                        <div class="prof">
                            <p>L</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">Lance Francisco</p>
                            <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                    </div>

                    <div class="message mMess 1122334" data-number="1122334">
                        <div class="messArea">
                            <p id="sname">James Ericson</p>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                        <div class="prof" style="background-color: #ff7b54;">
                            <p>J</p>
                        </div>
                    </div>

                    <div class="message">
                        <div class="prof" style="background-color: #939b62;">
                            <p>M</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">Marcus Dilinmer</p>
                            <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                    </div>

                    <div class="message">
                        <div class="prof" style="background-color: #ffb26b;">
                            <p>A</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">Alexandria Patkinson</p>
                            <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                    </div>

                    <div class="message">
                        <div class="prof">
                            <p>L</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">Lance Francisco</p>
                            <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                    </div>
                    <p class="timeId">8:43pm | 12/05/2021</p>
                    <div class="message mMess 1122334" data-number="1122334">
                        <div class="messArea">
                            <p id="sname">James Ericson</p>
                            <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                        </div>
                        <div class="prof" style="background-color: #ff7b54;">
                            <p>J</p>
                        </div>
                    </div>
                    End of Chat cont -->
                    </div>
                <?php } ?>
                <!-- <div class="message  d-none">
                    <div class="prof" style="background-color: #939b62;">
                        <p>M</p>
                    </div>
                    <div class="messArea">
                        <p id="sname">Marcus Dilinmer</p>
                        <div class="textM">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quasi quas aliquam commodi quaerat sit reiciendis dignissimos quam totam nemo.</div>
                        <div class="textM">Lorem ipsum dolor sit, amet consectetur adipisicing elit. https://mi.com. Dignissimos omnis illum voluptates sed provident saepe?.</div>
                    </div>
                </div> -->


                <!-- <div class="messageBox">
                    <button id="genMeetLink" class=" button-s1" tooltip="Google Docs" flow="right"><a href="https://docs.google.com/document/u/0/create" target="blank"><span class="material-icons">description</span></a></button>
                    <button id="genMeetLink" class=" button-s1" tooltip="Google Meet" flow="right"><a href="https://meet.google.com/new" target="blank"><span class="material-icons">video_call</span></a></button>
                    <button id="linkCopy" class="button-s1" tooltip="Copy Link" flow="up"><span class="material-icons">link</span></button>
                    <div class="textA"><textarea id="message" name="message" rows="1" cols="30" placeholder="Type your message here"></textarea></div>
                    <button id="send" class="button-s1" tooltip="Send" flow="left"><span class="material-icons headerIcon">send</span></button>
                </div>
                <div id="goToDown" class="downDowny"><span class="material-icons">arrow_downward</span></div> -->
            </div>

            <!-- <div class="settingsBar">

                <div class="headerSet">
                    <div class="welcomeMess">
                        <div class="img"><video src="https://res.cloudinary.com/duw2s4w0s/video/upload/v1620962563/HO%20TV%20assets/ezgif-6-38fc0e6aefa8_owq33f.mp4" alt="brainstorm video" alt="brainstorm video" autoplay></video></div>
                        <h1 class="roomTitle">Error Pharsing</h1>
                        <p id="copyLinker2">#4987720</p>
                    </div>
                </div>

                <div class="membersSec">
                    <h1>Members</h1>
                    <ul id="membersList">
                        <li class="membersCont">
                            <div class="prof" style="background-color: #ffb26b;">
                                <p>A</p>
                            </div>
                        </li>
                    </ul>-->
        </div>
    </div>
</body>

<!-- <div class="replay">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10">
            <?php

            $compsql = mysqli_query($conn, "SELECT `users`.*, `complaints`.* FROM `users` JOIN `complaints` ON `users`.`id` = `complaints`.`user_id` where `users`.`id`='" . $_SESSION['uid'] . "'");
            while ($comp_row = mysqli_fetch_array($compsql)) {
            ?>
                <div class="chatMessages">
                    <!--Start of Chat cont>
                    <div class="welcomeMess">
                        <h1 class="roomTitle">hi <span><?php echo $comp_row['name']; ?></span>!
                        </h1>
                    </div>

                    <div class="message">
                        <div class="prof">
                            <p>q?</p>
                        </div>
                        <div class="messArea">
                            <p id="sname">you asked...</p>
                            <div class="textM">
                                <p><?php echo $comp_row['complaint']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="message mMess 1122334" data-number="1122334">
                        <div class="messArea">
                            <p id="sname">the answer is....</p>
                            <div class="textM">
                                <p><?php echo $comp_row['reply']; ?></p>
                            </div>
                        </div>
                        <div class="prof" style="background-color: #ff7b54;">
                            <p>A.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<style>
    .replay {
        background-color: #ddd;
        text-align: center;
        align-items: center;
    }
</style> -->