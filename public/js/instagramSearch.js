$(document).ready(function () {
    // Hide Error message
    $("#errorMessageBox").text("");
    $("#errorMessageBox").hide();

    // you can use Return instead of Button click
    $("#userName").keyup(function(e) {
    e.preventDefault();
        if(e.keyCode == 13)
        {
            $("#showImageButton").click()        
        }
    });
    

    
    
    // calls getInstagramProfileId function
    $("#showImageButton").click(function () {
        $("#errorMessageBox").text("");
        $("#errorMessageBox").hide();
        getInstagramProfileId();
    });
});

/**
 *  get Instagram Profile Id:
 *  
 */
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


/**
 * get the image url with the profileId as param
 * 
 * @param {*} profileId 
 */
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
/**
 *  adds the url to an img container which is shown under the Searchbar
 * 
 * @param {*} finalUrl 
 */
function showProfileImage(finalUrl) {
   
    $("#profileImageContainer").attr("src", finalUrl);

}