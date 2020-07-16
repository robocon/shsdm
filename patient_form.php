<style>
.myInput{
    border: 1px solid #565656;
    font-size: 1rem;
    height: 2.5em;
    line-height: 1.5;
    border-radius: 4px;
}
</style>

<section class="hero is-light">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">ฟอร์มบันทึกข้อมูลเบาหวาน</h1>
        </div>
    </div>
</section>

<div style="padding: 4px;">

<form action="index.php" method="post">

    <div class="columns is-variable is-1">
        <div class="column">
            <div class="field">
                <label class="label">เลขบัตรประชาชน</label>
                <div class="control"><input class="input" type="text" name="idcard" value="3521300298138"></div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">วันที่ลงทะเบียน</label>
                <div class="control">
                    <input class="input" type="text" name="date_register" id="date_register" value="26-06-2020">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">DM Number</label>
                <div class="control">3428</div>
            </div>
        </div>
    </div>

    <div class="columns is-variable is-1">
        <div class="column is-2">
            <div class="field">
                <label class="label">ยศ/คำนำหน้าชื่อ</label>
                <div class="control">
                    <input class="input" type="text" name="yot" value="นาง">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">ชื่อ</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="สุคนธ์ทิพย์">
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">นามสกุล</label>
                <div class="control">
                    <input class="input" type="text" name="surname" value="สิทธิหล้า">
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">วัน-เดือน-ปี เกิด</label>
                <div class="columns">
                    <div class="column">
                        <div class="field is-grouped">
                            <div class="control">
                                <div class="select">
                                    <?php getDateList('days', '05');?>
                                </div>
                            </div>
                            <div class="control">
                                <div class="select">
                                    <?php getMonthList('months','06');?>
                                </div>
                            </div>
                            <div class="control">
                                <div class="select">
                                    <?php 
                                    $yRange = range(date('Y'), (date('Y')-80));
                                    ?>
                                    <?php getYearList('years',false,1960,$yRange);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns is-variable is-1">
        <div class="column">
            <div class="field">
                <label class="label">ส่วนสูง</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="height" value="148"> </p>
                        <p class="control"><a class="button is-static">ซม.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">น้ำหนัก</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="weight" value="50"> </p>
                        <p class="control"><a class="button is-static">กก.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">รอบเอว</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="waist" value="81"> </p>
                        <p class="control"><a class="button is-static">ซม.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">อุณหภูมิ</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="temp" value="36.1"> </p>
                        <p class="control"><a class="button is-static">&#8451</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns is-variable is-1">
        <div class="column">
            <div class="field">
                <label class="label">Pulse</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="pulse" value="84"> </p>
                        <p class="control"><a class="button is-static">ครั้ง/นาที</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">Rate</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="rate" value="20"> </p>
                        <p class="control"><a class="button is-static">ครั้ง/นาที</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">BMI</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field ">
                        <?php $bmi = (50/(1.48*1.48)); ?>
                        <p class="control"><input class="input" type="text" name="bmi" value="22.83"></p>
                        เกณฑ์ ปกติ
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">ความดัน</label>
                <div class="columns is-variable is-1">
                    <div class="column is-6">
                        <p class="control"><input class="input" type="text" placeholder="Sys" name="bp1" value="115"></p>
                    </div>
                    <div class="column is-6">
                        <div class="field ">
                            <p class="control"><input class="input" type="text" placeholder="Dia" name="bp2" value="60"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns is-variable">
        <div class="column is-4">
            <div class="field">
                <label class="label">Retinal Exam</label>
                <div class="control">
                    <input class="input" type="date" name="retinal_exam_date" id="retinal_exam_date">
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="retinal_exam">No DR
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="retinal_exam">Mild NPDR
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="retinal_exam">Moderate NPDR
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="retinal_exam" checked="checked">Severe NPDR
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="retinal_exam">PDR
                    </label>
                </div>
                
                <div class="control">
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume" accept="image/*" onchange="loadFile(event,'output')">
                            <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">เลือกรูป</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <img id="output" style="width: 350px;" src="images/retinal-exam.jpg">
                    </div>
                </div>

            </div>
        </div>

        <div class="column is-4">
            <div class="field">
                <label class="label">Foot Exam</label>
                <div class="control">
                    <input class="input" type="text" name="foot_exam_date" id="foot_exam_date" value="">
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="foot_exam">Low Risk
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="foot_exam" checked="checked">Moderate Risk
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="foot_exam">Hight Risk
                    </label>
                </div>

                <div class="control">
                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume" accept="image/*" onchange="loadFile(event,'output2')">
                            <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">เลือกรูป</span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <img id="output2" style="width: 350px;" src="images/foot-exam.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-4">
            <div class="field">
                <label class="label">ตรวจสุขภาพฟัน</label>
                <div class="control">
                    <input class="input" type="date" name="teeth_date" id="teeth_date">
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="teeth">ได้รับการตรวจ
                    </label>
                </div>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="teeth" checked="checked">ไม่ได้รับการตรวจ
                    </label>
                </div>

                
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">การวินิจฉัย</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="diag">DM type1
                    </label>
                    <label class="radio">
                        <input type="radio" name="diag" checked="checked">DM type2
                    </label>
                    <label class="radio">
                        <input type="radio" name="diag">Uncertain type
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                    การวินิจฉัยครั้งแรก ประมาณ พ.ศ. <input class="input" type="date" name="diag_date" id="diag_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">โรคร่วม HT</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="disease_ht" checked="checked">No
                    </label>
                    <label class="radio">
                        <input type="radio" name="disease_ht">Essential HT
                    </label>
                    <label class="radio">
                        <input type="radio" name="disease_ht">Secondary HT
                    </label>
                    <label class="radio">
                        <input type="radio" name="disease_ht">Uncertain type
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">โรคร่วมอื่นๆ</label>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Neuropathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Heart Failure
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">Nephropathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">CVD
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]">IHD
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Foot ulcer
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Retinopathy
                    </label>
                </div>
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="disease_etc[]" checked="checked">Dyslipidemia
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                    การวินิจฉัยโรคร่วมครั้งแรก ประมาณ พ.ศ. <input class="input" type="date" name="disease_etc_date" id="disease_etc_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">ประวัติบุหรี่</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="cigarette">สูบบุหรี่
                    </label>
                    <label class="radio">
                        <input type="radio" name="cigarette" checked="checked">ไม่สูบบุหรี่
                    </label>
                    <label class="radio">
                        <input type="radio" name="cigarette">N/A
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Foot care</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="foot_care">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="foot_care" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="foot_care_date" id="foot_care_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Nutrition</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="nutrition">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="nutrition" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="nutrition_date" id="nutrition_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Exercise</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="exercise">ให้ความรู้
                    </label>
                    <label class="radio">
                        <input type="radio" name="exercise" checked="checked">ไม่ได้ให้ความรู้
                    </label>
                    
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <div class="control">
                วันที่ให้ความรู้ <input class="input" type="date" name="exercise_date" id="exercise_date">
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">BS</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="bs" value="202"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">HbA1c</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="hba1c" value="9.3"> </p>
                        <p class="control"><a class="button is-static">%</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">LDL</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="ldl" value="32"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="field">
                <label class="label">Creatinine</label>
                <div class="columns is-variable is-1">
                    <div class="column">
                        <div class="field has-addons">
                        <p class="control"><input class="input" type="text" name="creatinine" value="1.28"> </p>
                        <p class="control"><a class="button is-static">mg/dl</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Urine protein</label>
                <div class="control"><input class="input" type="text" name="urine_protein" value=""></div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">UA</label>
                <div class="control"><input class="input" type="text" name="ua" value=""></div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">Microalbuminuria</label>
                <div class="control"><input class="input" type="text" name="microalbuminuria" value=""></div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field">
                <img src="images/bs.png" alt="images">
            </div>
        </div>
    </div>

    <div class="field is-grouped-centered">
        <div class="control">
            <button class="button is-primary is-large is-fullwidth">บันทึกข้อมูล</button>
            <input type="hidden" name="action" value="save_form">
            <!-- <input type="hidden" name="page" value="patient_form"> -->
        </div>
    </div>

</div>



</form>
<script>
// Upload Preview Image
var loadFile = function(event,divId) {
    var output = document.getElementById(divId);
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};


bulmaCalendar.attach('#date_register', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD",
    startDate: new Date('06/26/2020')
});

bulmaCalendar.attach('#retinal_exam_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD"
});

bulmaCalendar.attach('#foot_exam_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    startDate: new Date('06/26/2020'),
    "dateFormat":"YYYY/MM/DD"
});

bulmaCalendar.attach('#teeth_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD"
});


bulmaCalendar.attach('#diag_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD",
    startDate: new Date('01/01/2019')
});

bulmaCalendar.attach('#disease_etc_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD",
    startDate: new Date('01/01/2019')
});


bulmaCalendar.attach('#foot_care_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD"
});


bulmaCalendar.attach('#nutrition_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD"
});


bulmaCalendar.attach('#exercise_date', { 
    "type":"date",
    "showHeader":false,
    "lang":"th",
    "dateFormat":"YYYY/MM/DD"
});

</script>