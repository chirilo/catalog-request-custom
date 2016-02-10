<!DOCTYPE html> 
<html lang="en"> 
    <head> 
    <meta charset="utf-8"> 
    <title>Catalog Request Form</title>
    <!-- <script type="text/javascript" src="js/vendor/jquery.js"></script> -->
    <script src="jquery.min.js"></script>
    <link href="bootstrap-combined.min.css" rel="stylesheet"> 
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript" src="http://beeker.io/lab/exit-intent-popup/bioep.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(e){
        bioEp.init({
            html: '<div id="bio_ep_content">' +
            '<img src="img/body-vibe-logo.png" alt="Get your Catalog Copy!" />' +
            '<span>HOLD ON!</span>' +
          '<span>We have a <b style="color: red">NEW</b> INOX Stainless Steel Jewelry Catalog.</span>' +
            '<span>Do you want to get it?</span>' +
            '<div id="buttons-div"><a href="#YOURURLHERE" class="bio_btn bio_btn_yes">Yes, Please!</a>&nbsp; ' +
            '<a href="#" onclick="bioEp.hidePopup();" class="bio_btn bio_btn_no">No, Thank you.</a></div></div><div id="thanks"><p><a onclick="bioEp.hidePopup()" data-toggle="modal" href="#form-content" class="btn btn-info">Get Catalog</a><a class="btn btn-default"  data-dismiss="modal">No, Thanks!</a></p></div>',
            css: '#bio_ep {width: 400px; height: 300px; color: #333; background-color: #fafafa; text-align: center;}' +
            '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
            '#bio_ep_content span:nth-child(2) {display: block; color: #f21b1b; font-size: 32px; font-weight: 600;}' +
            '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
            '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
            '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
            fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
            cookieExp: 0
        });

        if((e.pageY - scroll) >= 7 )
          wasLower = 1;
        if((e.pageY - scroll) < 7 && wasLower )
          bioEp.showPopup();

      });
    </script>
    <script>
     $(function() {
        //twitter bootstrap script
        $("button#submit").click(function(){
              $.ajax({
                  type: "POST",
            url: "process.php",
            data: $('form.contact').serialize(),
                  success: function(msg){
                        $("#thanks").html(msg)
                    $("#form-content").modal('hide'); 
                  },
            error: function(){
              alert("failure");
              }
                  });
        });
      });
    </script>
  </head>
  
  <body>
    <div class="container">
      <h4>Demo Page</h4>
      <h3>Move your cusor above this window after 5 seconds.</h3>
      <!-- twitter content -->
      <div id="form-content" class="modal hide fade in" style="display: none; ">
              <div class="modal-header">
                    <a class="close" data-dismiss="modal">×</a>
                    <h3>Edit Shipping Details</h3>
              </div>
        <div>
          <form class="contact">
          <fieldset>
                 <div class="modal-body">
                   <ul class="nav nav-list">
            <li class="nav-header">Name</li>
            <li><input class="input-xlarge" value=" krizna" type="text" name="name"></li>
            <li class="nav-header">Email</li>
            <li><input class="input-xlarge" value=" user@krizna.com" type="text" name="Email"></li>
            <li class="nav-header">Message</li>
            <li><textarea class="input-xlarge" name="sug" rows="3"> Thanks for the article and demo
            </textarea></li>
            </ul> 
                </div>
          </fieldset>
          </form>
        </div>
           <div class="modal-footer">
               <button class="btn btn-success" id="submit">submit</button>
               <a href="#" class="btn" data-dismiss="modal">Close</a>
          </div>
      </div>
     </div>
     <script>
     $(function() {
    //twitter bootstrap script
      $("button#submit").click(function(){
            $.ajax({
                type: "POST",
          url: "process.php",
          data: $('form.contact').serialize(),
                success: function(msg){
                      $("#thanks").html(msg)
                  $("#form-content").modal('hide'); 
                },
          error: function(){
            alert("failure");
            }
                });
      });
    });
    </script>
  </body>
</html>