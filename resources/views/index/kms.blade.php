
    <style>
        .kmsh5{
            width: 100%;
            min-height: 400px;
        }
    </style>
    @include('index.top')
    <div  style="width:100%;height:31%;margin-top:52px;">
            <video src="http://kms.hswdjy.com/KMS.mp4"
            style="width:100%; height:100%; object-fit: fill;"
             poster="kmsvb.png"
                   preload="true"
                   webkit-playsinline="true"
                   x5-video-player-type="h5"
                   x5-video-orientation="portraint"
                   className={styles.video}
                   controls
             id="video1" >
            </video>
           
            </div>
<img src="/H5_KMS1.jpg" alt="" width="100%" class="kmsh5" >
    @include('index.bottom')
