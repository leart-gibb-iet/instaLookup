$(document).ready(function () {

    $("#errorMessageBox").text("");
    $("#errorMessageBox").hide();

    
    $("#userName").keyup(function(e) {
    e.preventDefault();
        if(e.keyCode == 13)
        {
            $("#showImageButton").click()        
        }
    });
    

    
    
    
    $("#showImageButton").click(function () {
        $("#errorMessageBox").text("");
        $("#errorMessageBox").hide();
        getInstagramProfileId();
    });
});

function getInstagramProfileId() {

    $("#profileImageContainer").attr("src", "https://picload.org/thumbnail/dlwrgiow/ufo-2.jpg");
    // testing purpose
    
/*
    var username = $("#userName").val();
    var profileUrl = "https://www.instagram.com/" + username + "/";
    debugger;
    $(function () {

        $.ajax({
            url: profileUrl,
            success: function (data) {

                var myRegexp = /profilePage_(\d*)/g;
                var match = myRegexp.exec(data);

                var profileId = match[1];

                getProfileImageUrl(profileId);

            },
            error: function (error) {
                $("#errorMessageBox").text("Profile not found");
                $("#errorMessageBox").show();
                $("#profileImageContainer").attr("src", "");
                console.log(error);
            }
        });

    });
*/

}

function getProfileImageUrl(profileId) {


    var instaUrl = "https://i.instagram.com/api/v1/users/" + profileId + "/info/";

    $(function () {

        $.ajax({
            url: instaUrl,
            success: function (data) {

                var finalUrl = data['user']['hd_profile_pic_url_info']['url'];

                showProfileImage(finalUrl);
            },
            error: function (error) {
                $("#errorMessageBox").text("Image not found");
                $("#errorMessageBox").show();
                $("#profileImageContainer").attr("src", "");
                console.log(error);
            }
        });

    });


}

function showProfileImage(finalUrl) {
   
    $("#profileImageContainer").attr("src", finalUrl);

}