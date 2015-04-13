

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/jqueryui/ui-lightness/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/scripts/jHtmlArea-0.8.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/style/jHtmlArea.css" />
<style type="text/css">
    /* body { background: #ccc;} */
    div.jHtmlArea .ToolBar ul li a.custom_disk_button
    {
        background: url(<?php echo Yii::app()->theme->baseUrl; ?>/images/disk.png) no-repeat;
        background-position: 0 0;
    }

    div.jHtmlArea
    {
        border: solid 1px #ccc;
    }
</style>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://html5sql.com/js/html5sql.js"></script>

<form name="frm" id="frm" action="index.php?r=subjects/insert" method="post">            <div id="frm_es_" class="errorSummary" style="display:none">
        <ul><li>dummy</li></ul></div>            <p>
    </p>
    <table class="rowtable2" border="0" width="50%" cellpadding="5" cellspacing="1">
        <tbody>
        <tr class="rowone" valign="top">
            <td>
                Subject name:
            </td>
            <td>
                <input class="inp" size="50" name="Subject[name]" id="Subject_name" type="text" maxlength="50"> <label style="color: #ff0000">*</label>
            </td>
        </tr>
        <tr class="rowtwo" valign="top">
            <td>
                Subject description:
            </td>
            <td>
                <textarea rows="15" cols="50" name="Subject[description]" id="Subject_description"></textarea>

            </td>
        </tr>
        </tbody>
    </table>
    <p class="center">
        <input class="btn" name="bsubmit" onclick="addRow()" is="bsubmit" value=" Save " type="button">
    </p>
</form>
<table id="myTable">
    <tbody>
    <tr><td>Foo</td></tr>
    </tbody>
    <tfoot>
    <tr><td>footer information</td></tr>
    </tfoot>
</table>
<script>
    var DB_ISCHANGE=0;


    // this is the id of the form
    $("#frm").submit(function() {

        var url = "index.php?r=subjects/insert"; // the script where you handle the form input.
        alert( $("#frm").serialize()); // show response from the php script.
        return false;
        $.ajax({
            type: "POST",
            url: url,
            data: $("#frm").serialize(), // serializes the form's elements.
            success: function(data)
            {
                alert(data); // show response from the php script.
            }
        });

        return false; // avoid to execute the actual submit of the form.
    });


    function addRow()
    {

        var guid = getguid();
        var txtname = $('#Subject_name').val();
        var txtmess = $('#Subject_description').val();

        html5sql.process(
            [

                {
                    sql: "insert into 'paginate' ('guid', 'name', 'message') values(?,?,?);",
                    data: [guid,txtname,txtmess],
                    success: function(transaction, results) {
                        DB_ISCHANGE = 1;
                        console.info('Success Inserting Second Record');
                        $("#myTable > tbody").append("<tr><td>"+txtmess+"</td></tr>");
                       // checkDataChange();
                    }
                }
            ],
            function() {
                console.log("Final Sucess Callback");
            },
            function(error, failingQuery) {
                console.error("Error: " + error.message);
            }
        );

      //
    }
    $(function(){
        html5sql.openDatabase("demo1", "Demo Database1", 5*1024*1024);
        var sqlCreate= "CREATE TABLE IF NOT EXISTS paginate (id INTEGER , name TEXT,message  TEXT,guid TEXT);";
//var sqlCreate ="CREATE TABLE 'paginate'('id' INTEGER ,   'name' TEXT,    'message' text); ";
        html5sql.process(
            [
                "DROP TABLE IF EXISTS paginate;",
                sqlCreate,

            ],
            function(){

            },
            function(error, statement){

            }
        );

        $.post('index.php?r=subjects/ajax',function(jsondata){
//getData[1][1]
            var getData = jQuery.parseJSON(jsondata);
            //debugger;
            for(var i=0;i< getData.length;i++ )
            {

                html5sql.process(
                    [

                        {
                            sql: "insert into 'paginate' ('id', 'name', 'message') values(?,?,?);",
                            data: [getData[i][0],getData[i][1],getData[i][2]],
                            success: function(transaction, results) {
                                console.info('Success Inserting Second Record');
                            }
                        }
                    ],
                    function() {
                        console.log("Final Sucess Callback");
                    },
                    function(error, failingQuery) {
                        console.error("Error: " + error.message);
                    }
                );

            }
            MAIN_LOAD_FIRST();


        });

    });
    function MAIN_LOAD_FIRST()
    {
        loadDataGrid();
      window.setInterval("checkDataChange()", 5000);
    }

    var DATA_ARR =null;
    function loadDataGrid()
    {
         runSQL("SELECT * FROM paginate where 1=? order by id",[1], function(rowsArray) {
             for(var i = 0; i < rowsArray.length; i++){
                 //  successfullStatements.append("<li>Retrieved" +rowsArray[i].message+"</li>");
                 $("#myTable > tbody").append("<tr><td>"+rowsArray[i].message+"</td></tr>");
             }
         });
    }

    function checkDataChange()
    {

        $.ajax({
            type: "POST",
            cache: false,
            url: "ping.php?r="+Math.random(),

            success: function (data, text) {
                IS_ONLINE=1;
                IS_ONLINE=1;$('#divstatus').html("ONNNN1"+Math.random());
                updateDataOnline();


            },
            error: function () {
                IS_ONLINE=0;
                $('#divstatus').html("OFFFss");

            },
            complete: function() {

            }
        });



//insert data xuong server, update lai dong vua moi insert
//        $.post(
//            "index.php?r=subjects/ajax?is_insert=1",
//            { name: "Zara" },
//            function(data) {
//               console.log(data);
//            }
//
//        );



    }
  // $(function() { window.setInterval("checkDataChange()", 5000); });

function updateDataOnline()
{

    if(DB_ISCHANGE==0)return;



    runSQL("SELECT * FROM paginate where 1=? and guid!='' order by id",[1], function(rowsArray) {


        for(var i = 0; i < rowsArray.length; i++){
            //  successfullStatements.append("<li>Retrieved" +rowsArray[i].message+"</li>");
            //$("#myTable > tbody").append("<tr><td>"+rowsArray[i].message+"</td></tr>");
            console.log(rowsArray[i].message);

            //update data to server
            var url = "index.php?r=subjects/ajax&is_insert=1&guid="+rowsArray[i].guid; // the script where you handle the form input.
            var myObject = {
                Subject: {
                    name:  rowsArray[i].name,
                    description: rowsArray[i].message
                }
            };

            $.ajax({
                type: "POST",
                traditional: true,
                url: url,
                data:  $.param( myObject ),
                success: function(myguid)
                {
                    //debugger;
                    // var jsondata  = $.parseJSON(myguid);

                    //alert(data); // show response from the php script.
                    runSQL("update  paginate set guid='' where  guid=? ",[myguid], function(datare) {

                    });



                }
            });
            DB_ISCHANGE  =0;


        }

    });
}
    function getguid()
    {
        function S4() {
            return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
        }

// then to call it, plus stitch in '4' in the third group
        guid = (S4() + S4() + "-" + S4() + "-4" + S4().substr(0,3) + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();
        return guid;
    }



    function runSQL(sqlrun,arrdata,mycallback)
    {
        html5sql.process(
            [{
                sql:sqlrun,
                data: arrdata
            }],
            function(transaction, results, rowsArray){
                mycallback(rowsArray);

            },
            function(error, statement){
                alert("Bi loi:"+error+statement);
            }
        );

    }

</script>
<div id="divstatus">good morning</div>
