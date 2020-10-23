$().ready(function(){
	$.validator.addMethod("greaterThan", function(value, element, params) {
		 if (!/Invalid|NaN/.test(new Date(value))) {
			    return new Date(value) >= new Date($(params).val());
			 }
			    return isNaN(value) && isNaN($(params).val()) 
			        || (Number(value) > Number($(params).val())); 
			},'From date cannot be after To Date');
	
	$.validator.addMethod("futureDate", function(value, element) {
		 var now = new Date();
	     var today = new Date(now.getFullYear(), now.getMonth(),now.getDate()).setHours(0,0,0);
		 if ((!/Invalid|NaN/.test(new Date($("#fromDate").val()))) && (!/Invalid|NaN/.test(new Date($("#toDate").val()))) && ($('input[name="active"]:checked').val() === 'Yes') ) {
			 console.log(today);
			 var fromDate = new Date($("#fromDate").val()).setHours(0,0,0);
			 var toDate = new Date($("#toDate").val()).setHours(0,0,0);

			 if( today < fromDate && today < toDate ){
				 return false;
			 }else{
				 return true;
			 }
			} else{
				 return true;
			 }
		});
	
	$.validator.addMethod("futureDatePublished", function(value, element) {
		 if ((!/Invalid|NaN/.test(new Date($("#fromDate").val()))) && (!/Invalid|NaN/.test(new Date($("#toDate").val()))) && ($('input[name="active"]:checked').val() === 'Yes') && ($("#status").val() === 'Published') ) {
			 
			 var now = new Date();
			 var today = new Date(now.getFullYear(), now.getMonth(),now.getDate()).setHours(0,0,0);
			 var fromDate = new Date($("#fromDate").val()).setHours(0,0,0);
			 if(today < fromDate){
				 return false;
			 }else{
				 return true;
			 }
			} else{
				 return true;
			 }
		});
		
		$.validator.addMethod("notPastDate", function(value, element) {
			var now = new Date();
			var today = new Date(now.getFullYear(), now.getMonth(),now.getDate());
		 if (!/Invalid|NaN/.test(new Date(value))) {
			 if(today > new Date(value)){
				 return false;
			 }else{
				 return true;
			 }
			} else{
				 return false;
			 }
		}, 'To date should not be in Past');
		
		$.validator.addMethod("noDuplicatesInGroup", function(value, element, param) {
			var elems = $(element).closest('form').find(param);
			matchesFound = 0;
			$.each(elems, function(){
				thisVal = $(this).val().trim().toLowerCase();
				if(thisVal == value.trim().toLowerCase()){
					matchesFound++;
				}
			});
			
			return matchesFound <= 1;
		 
		}, 'Poll Survey cannot have duplicate options');
	
	$('#pollModal').on('hidden.bs.modal', function (e) {
		  $(this).removeData('bs.modal');
		});
	
	var pollCreationForm = $("#pollCreationForm").validate({
	  rules: {
		  englishQuestion : {
			required: true,
			rangelength: [1, 500]
			//alphanumeric: true
		},
		arabicQuestion: {
			required: true,
			rangelength: [1, 500]
			//alphanumeric: true
		},
		optionEn1: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn2: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn3: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn4: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn5: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn6: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn7: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn8: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn9: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionEn10: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.english'
			//alphanumeric: true
		},
		optionAr1: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
			//alphanumeric: true
		},
		optionAr2: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr3: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr4: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr5: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr6: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr7: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr8: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr9: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		optionAr10: {
			required: true,
			rangelength: [1, 100],
			noDuplicatesInGroup: '.arabic'
		},
		fromDate: {
			required: true,
			rangelength: [1, 10],
			date: true,
			futureDatePublished: true
		},
		toDate: {
			required: true,
			rangelength: [1, 10],
			date: true,
			greaterThan: "#fromDate",
			notPastDate: true
		},
		active: {
			required: true,
			futureDate: true
		}
		
	  },
	  messages: {
		  englishQuestion:{
			required: 'Please enter Poll Question in English language',
			rangelength: 'Exceeds maximum characters.'
		  },
		  arabicQuestion:{
				 required: 'Please enter Poll Question in Arabic language',
				 rangelength: 'Exceeds maximum characters.'
			 },
		  optionEn1:{
			 required: 'Please enter Poll opinion1 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn2:{
			 required: 'Please enter Poll opinion2 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn3:{
			 required: 'Please enter Poll opinion3 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn4:{
			 required: 'Please enter Poll opinion4 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn5:{
			 required: 'Please enter Poll opinion5 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn6:{
			 required: 'Please enter Poll opinion6 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn7:{
			 required: 'Please enter Poll opinion7 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn8:{
			 required: 'Please enter Poll opinion8 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn9:{
			 required: 'Please enter Poll opinion9 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionEn10:{
			 required: 'Please enter Poll opinion10 in English language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr1:{
			 required: 'Please enter Poll opinion1 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr2:{
			 required: 'Please enter Poll opinion2 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr3:{
			 required: 'Please enter Poll opinion3 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr4:{
			 required: 'Please enter Poll opinion4 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr5:{
			 required: 'Please enter Poll opinion5 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr6:{
			 required: 'Please enter Poll opinion6 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr7:{
			 required: 'Please enter Poll opinion7 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr8:{
			 required: 'Please enter Poll opinion8 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr9:{
			 required: 'Please enter Poll opinion9 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 optionAr10:{
			 required: 'Please enter Poll opinion10 in Arabic language.',
			 rangelength: 'Exceeds maximum characters.'
		 },
		 fromDate:{
			 required: 'Please select Valid Period.',
			 greaterThan:'From date cannot be after To Date',
			 futureDatePublished: 'Poll survey with future dates cannot be set as a default poll survey'
		 },
		 toDate:{
			 required: 'Please select Valid Period.',
			 greaterThan:'To date cannot be before from date',
			 notPastDate: 'To date cannot be before current date'
		 },
		 active:{
			 required: 'Please select the poll question to display as default or not.',
			 futureDate: 'Poll survey with future dates cannot be set as a default poll survey'
		 }
		
		 
	  }
	});	

	$("button#resetBtn").on('click', function(){pollCreationForm.resetForm();});
	
	$.validator.addMethod("isGreater", function(value, element) {
		var check= false;
		if ($('#fromDate').val() == "") {
			check= true;
		}else if (!/Invalid|NaN/.test(new Date(value))) {
			    if(new Date(value) < new Date($("#fromDate").val())){
			    	check=false;
			    }else{
			    	check=true;
			    }
		}
		return check;
		},"'To date cannot be before from date'");
	
	$.validator.addMethod("alphaNumeric", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
    }, "Please enter a keyword to Search.");

	$.validator.addMethod("nullCheck", function(value, element,params) {
		if ((value && value.trim() != '') || ($('#fromDate').val() != '')) {
		    return true;
		}
    });
	
	
	var pollsearchFormValidator =$("#pollSearchForm").validate({
		onfocusout: false,
		rules: {			
			fromDate: {
				//nullCheck: true,
				rangelength: [1, 10],
				date: true
			},
			toDate: {
				rangelength: [1, 10],
				date: true,
				isGreater: true
			},
			searchKey: {
				nullCheck: true,
				rangelength: [1, 50],
				alphaNumeric:{"#searchKey":false}
			}
		},
		messages: {
			
			searchKey:{
				alphaNumeric: 'Please enter a keyword to Search.',
				nullCheck: 'Please enter valid search input',
				rangelength: 'Exceeds maximum characters.'
			  },
				 toDate:{
					 required: 'Please select Valid Period.',
					 isGreater:'To date cannot be before from date'
				 }
		}
	});	
	$("#sreset").on('click', function(){pollsearchFormValidator.resetForm();});

	$("#pollSurveyForm").validate({
		errorClass : 'text-danger',
		errorLabelContainer: '#pollErrorMsgs',
		rules: {
			optionId : {
				required: true,
				nullCheck :"#optionId",
			}
		},
		messages: {
			optionId:{
				required: 'Please select an option from below'
			  }
		}
	});	
	
	$("input#active").on('click', function(){
		if ("Yes" === $('input#active:checked').val()){
			$('div.activeNote').show();
		}else{
			$('div.activeNote').hide();
		}
	});
});