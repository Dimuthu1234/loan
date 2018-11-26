//generate a new date
var date = new Date();
date.setDate(date.getDate() + 10);

$("#repayment_duedateonIndexForum").html(date.toJSON().slice(0,10));
//generate a new date


//International number formatting
function number_format(number, decimals, dec_point, thousands_point) {

    if (number == null || !isFinite(number)) {
        throw new TypeError("number is not valid");
    }

    if (!decimals) {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }

    if (!dec_point) {
        dec_point = '.';
    }

    if (!thousands_point) {
        thousands_point = ',';
    }

    number = parseFloat(number).toFixed(decimals);

    number = number.replace(".", dec_point);

    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);

    return number;
}

//International number formatting

//calculating the repayment amount
var repaymentdays_fromindex_homeform = $("#formIndexHome_fields_repaymentdays").val();
var totalrequestedamount_from_home_forcal = parseInt($('#formIndexHome_fields_requestedamount').val());

if(repaymentdays_fromindex_homeform == 10) {
    var Total_repayment_percentage = "15";
} else {
    var Total_repayment_percentage = "30";
}

var totalRepaymentAmountForuser_interest = parseInt((Total_repayment_percentage/100) * totalrequestedamount_from_home_forcal);
var totalRepaymentAmountForuser_final = number_format(totalrequestedamount_from_home_forcal+totalRepaymentAmountForuser_interest);


$("#TotalRepaymentAmount_indexhomeForm").html(totalRepaymentAmountForuser_final);
//calculating the repayment amount

var frSliderHandle,

    frSliderElement,

    fcVal;



function inputBoxChanged() {

    sliderHandle.update(inputValue.value);

}



function sliderMoved(sliderDataObject) {

    inputValue.value = sliderElement.value;

    //custom shenal's codes begin
    var valueofthesliderposition = inputValue.value = sliderElement.value;

    var minimumallowedloan = "5000";
    var maximumallowedloan = "50000";
    var exceedingvalue = "30001";
    var incrementingby10 = "1000";
    var incrementingby50 = "5000";

    var repaymentdate = $("#car").val();

    var devideby17 = Math.round(valueofthesliderposition/5.5);

    $('#IndexLoanamountonselectDisplay_onlyediting').css('display', 'none');//hide the ?req=edit span
    $('#IndexLoanamountonselectDisplay').css('display', 'inline-block');//display actual onchange the ?req=edit span

    $('#repayment_duedateonIndexForum_onlyediting').css('display', 'none');//hide "date" the ?req=edit span
    $('#repayment_duedateonIndexForum').css('display', 'inline-block');//display actual onchange the ?req=edit span

    //calculating the repayment amount
    var repaymentdays_fromindex_homeform = $("#formIndexHome_fields_repaymentdays").val();
    var totalrequestedamount_from_home_forcal = parseInt($('#formIndexHome_fields_requestedamount').val());

    if(repaymentdays_fromindex_homeform == 10) {
        var Total_repayment_percentage = "15";
    } else {
        var Total_repayment_percentage = "30";
    }

    var totalRepaymentAmountForuser_interest = parseInt((Total_repayment_percentage/100) * totalrequestedamount_from_home_forcal);
    var totalRepaymentAmountForuser_final = number_format(totalrequestedamount_from_home_forcal+totalRepaymentAmountForuser_interest);


    $("#TotalRepaymentAmount_indexhomeForm").html(totalRepaymentAmountForuser_final);
    //calculating the repayment amount

    //if the value less than 10 fields


    //update the inside form hidden field
    $("#indexformVariables_getone_requestedAmount").val(devideby17);
    //update the inside form hidden field

    if(devideby17 ==1) {
        $("#IndexLoanamountonselectDisplay").html("5,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("5,000");


        $("#formIndexHome_fields_requestedamount").val("5000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==2) {
        $("#IndexLoanamountonselectDisplay").html("6,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("6,000");
        $("#formIndexHome_fields_requestedamount").val("6000");//updating requested amount hidden field in the index form


    } else if(devideby17 ==3) {
        $("#IndexLoanamountonselectDisplay").html("7,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("7,000");
        $("#formIndexHome_fields_requestedamount").val("7000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==4) {
        $("#IndexLoanamountonselectDisplay").html("8,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("8,000");
        $("#formIndexHome_fields_requestedamount").val("8000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==5) {
        $("#IndexLoanamountonselectDisplay").html("9,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("9,000");
        $("#formIndexHome_fields_requestedamount").val("9000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==6) {
        $("#IndexLoanamountonselectDisplay").html("10,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("10,000");
        $("#formIndexHome_fields_requestedamount").val("10000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==7) {
        $("#IndexLoanamountonselectDisplay").html("11,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("11,000");
        $("#formIndexHome_fields_requestedamount").val("11000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==8) {
        $("#IndexLoanamountonselectDisplay").html("12,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("12,000");
        $("#formIndexHome_fields_requestedamount").val("12000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==9) {
        $("#IndexLoanamountonselectDisplay").html("13,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("13,000");
        $("#formIndexHome_fields_requestedamount").val("13000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==10) {
        $("#IndexLoanamountonselectDisplay").html("14,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("14,000");
        $("#formIndexHome_fields_requestedamount").val("14000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==11) {
        $("#IndexLoanamountonselectDisplay").html("15,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("15,000");
        $("#formIndexHome_fields_requestedamount").val("15000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==12) {
        $("#IndexLoanamountonselectDisplay").html("20,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("20,000");
        $("#formIndexHome_fields_requestedamount").val("20000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==13) {
        $("#IndexLoanamountonselectDisplay").html("25,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("25,000");
        $("#formIndexHome_fields_requestedamount").val("25000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==14) {
        $("#IndexLoanamountonselectDisplay").html("30,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("30,000");
        $("#formIndexHome_fields_requestedamount").val("30000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==15) {
        $("#IndexLoanamountonselectDisplay").html("35,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("35,000");
        $("#formIndexHome_fields_requestedamount").val("35000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==16) {
        $("#IndexLoanamountonselectDisplay").html("40,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("40,000");
        $("#formIndexHome_fields_requestedamount").val("40000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==17) {
        $("#IndexLoanamountonselectDisplay").html("45,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("45,000");
        $("#formIndexHome_fields_requestedamount").val("45000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==18) {
        $("#IndexLoanamountonselectDisplay").html("50,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("50,000");
        $("#formIndexHome_fields_requestedamount").val("50000");//updating requested amount hidden field in the index form

    } else if(devideby17 ==0) {
        $("#IndexLoanamountonselectDisplay").html("5,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("5,000");


        $("#formIndexHome_fields_requestedamount").val("5000");//updating requested amount hidden field in the index form

    } else {
        $("#IndexLoanamountonselectDisplay").html("50,000");
        $("#IndexLoanamountonselectDisplayTopBig").html("50,000");
        $("#formIndexHome_fields_requestedamount").val("50000");//updating requested amount hidden field in the index form

    }
    //if the value more than 10 fields

    //allow only under 15 thousand
    if(devideby17 >11) {

        $(".rs-track").addClass("backgroundColorWarningRed");
        $(".rs-slider").addClass("backgroundColorWarningRed_pointer");
        $(".OneFiledInMainFormApplicationHmeLABLEChooosen").addClass("backgroundColorWarningRed_topamount_color");//top text amount color
        $("#IndexLoanamountonselectDisplay").addClass("backgroundColorWarningRed_topamount_color");//bottom text amount color
        $("#LoanAmountExceededWarningId").fadeIn();

        $(".TotalRepaymentAmount_indexhomeFormAllmainBase").addClass("backgroundColorWarningRed_topamount_color");

    } else {
        $(".rs-track").removeClass("backgroundColorWarningRed");
        $(".rs-slider").removeClass("backgroundColorWarningRed_pointer");
        $(".OneFiledInMainFormApplicationHmeLABLEChooosen").removeClass("backgroundColorWarningRed_topamount_color");//top text amount color
        $("#IndexLoanamountonselectDisplay").removeClass("backgroundColorWarningRed_topamount_color");//bottom text amount color
        $("#LoanAmountExceededWarningId").fadeOut();

        $(".TotalRepaymentAmount_indexhomeFormAllmainBase").removeClass("backgroundColorWarningRed_topamount_color");

    }
    //allow only under 15 thousand

    //custom shenal's codes ends

}

//onclick date change
$(document).ready(function() {
    $(".oneRadioButtonOnHomePageLabel").click(function () {
        var RadiobtninHomeIndexForum = $('input[name=RadiobtninHomeIndexForum]:checked').val();
        var RadiobtninHomeIndexForum_data = $(this).data("repaying-date");

        var date = new Date();
        date.setDate(date.getDate() + RadiobtninHomeIndexForum_data);



        $('#repayment_duedateonIndexForum_onlyediting').css('display', 'none');//hide "date" the ?req=edit span
        $('#repayment_duedateonIndexForum').css('display', 'inline-block');//display actual onchange the ?req=edit span

        $("#repayment_duedateonIndexForum").html(date.toJSON().slice(0,10));

        $("#indexformVariables_getone_repayingdays").val(RadiobtninHomeIndexForum_data); //change the repayment days inside submitting form

        //update the hidden field
        if(RadiobtninHomeIndexForum_data == 10) {
            $("#formIndexHome_fields_repaymentdays").val(RadiobtninHomeIndexForum_data);//updating repayment days hidden field in the index form
            $("#formIndexHome_fields_repaymentdate").val(date.toJSON().slice(0,10));//updating repayment date hidden field in the index form




        } else {
            $("#formIndexHome_fields_repaymentdays").val(RadiobtninHomeIndexForum_data);//updating repayment days hidden field in the index form

            $("#formIndexHome_fields_repaymentdate").val(date.toJSON().slice(0,10));//updating repayment date hidden field in the index form
        }
        //update the hidden field

        //calculating the repayment amount
        var repaymentdays_fromindex_homeform = $("#formIndexHome_fields_repaymentdays").val();
        var totalrequestedamount_from_home_forcal = parseInt($('#formIndexHome_fields_requestedamount').val());

        if(repaymentdays_fromindex_homeform == 10) {
            var Total_repayment_percentage = "15";
        } else {
            var Total_repayment_percentage = "30";
        }

        var totalRepaymentAmountForuser_interest = parseInt((Total_repayment_percentage/100) * totalrequestedamount_from_home_forcal);
        var totalRepaymentAmountForuser_final = number_format(totalrequestedamount_from_home_forcal+totalRepaymentAmountForuser_interest);


        $("#TotalRepaymentAmount_indexhomeForm").html(totalRepaymentAmountForuser_final);
        //calculating the repayment amount

    });
});

//onclick date change



$(document).ready(function (sliderDataObject) {

    $(".slider").mtRangeSlider({

        min: 0,

        max: 100,

        initialValue: 27,

        onChange: sliderMoved

    });



    $("#slider-curr-value").val("27").on("focus", function () {this.select();}).change(inputBoxChanged);

    $("#IndexLoanamountonselectDisplay").html("9,000");

    sliderHandle = $("#slider").data("mtRangeSlider"), // Slider positioning

        sliderElement = document.getElementById("slider"), // getting slider value

        inputValue = document.getElementById("slider-curr-value"); //THis is where you may get and set the value of textbox

});







