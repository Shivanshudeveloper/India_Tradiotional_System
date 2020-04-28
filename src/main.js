$(document).ready(function(){
	$("input[type='radio']").click(function(){
		var radioValue = $("input[name='worked_as']:checked").val();
		if(radioValue == "Organization"){
			$("#workLocation").attr('type', 'text');
			$("#workLocation").attr('value', '');
		} else {
			$("#workLocation").attr('type', 'text');
			$("#workLocation").attr('value', '');
        }
	});

	console.log("DSDS");

	// =========================================================
	$("#past_research_field_interest" ).change(function() {
		var value = $("#past_research_field_interest").val();
		if (value == "Science, Engineering, Technology") {
			$("#past_research_field_interest_sub").html(`
				<option value="Engineering & Technology">Engineering & Technology</option>
				<option value="Town planning architecture">Town planning architecture</option>
				<option value="Sustainibility, Environment">Sustainibility, Environment</option>
				<option value="Mathematics & Computing">Mathematics & Computing</option>
				<option value="Astronomy">Astronomy</option>
				<option value="life sciences, Biology, Zoology">life sciences, Biology, Zoology</option>
				<option value="Geography">Geography</option>
				<option value="Physics">Physics</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Cosmology, Origins of Universe">Cosmology, Origins of Universe</option>
				<option value="Craftmanship, Trades, Skills">Craftmanship, Trades, Skills</option>
			`);
		} else if (value == "Health, Wellness") {
			$("#past_research_field_interest_sub").html(`
				<option value="Anatomy, Physiology">Anatomy, Physiology</option>
				<option value="Surgery">Surgery</option>
				<option value="Medicine">Medicine</option>
				<option value="Medical administration, Management">Medical administration, Management</option>
				<option value="Child care, Geriatry">Child care, Geriatry</option>
				<option value="Pharmacology">Pharmacology</option>
				<option value="Integrated health">Integrated health</option>
				<option value="Dietology">Dietology</option>
			`);
		} else if (value == "Psychology, Cognition, linguistics, Phoenetics,  Epistomology") {
			$("#past_research_field_interest_sub").html(`
				<option value="Linguistics">Linguistics</option>
				<option value="Phoenetics">Phoenetics</option>
				<option value="Cognition">Cognition</option>
				<option value="Psychology">Psychology</option>
				<option value="Epistemology">Epistemology</option>
				<option value="Personality">Personality</option>
			`);
		} else if (value == "Management, Administration, Law, Governance") {
			$("#past_research_field_interest_sub").html(`
				<option value="Public administration">Public administration</option>
				<option value="Law, Jurispudence">Law, Jurispudence</option>
				<option value="Management, Process driven development">Management, Process driven development</option>
				<option value="Leadership">Leadership</option>
			`);
		} else if (value == "Art, literature, Culture, Aesthetics folklore, Education") {
			$("#past_research_field_interest_sub").html(`
				<option value="Literature, Language, Music">Literature, Language, Music</option>
				<option value="Folklore traditions">Folklore traditions</option>
				<option value="Education systems">Education systems</option>
				<option value="Education methods">Education methods</option>
				<option value="Aesthetics">Aesthetics</option>
			`);
		} else if (value == "Indian Traditional Knowledge Base") {
			$("#past_research_field_interest_sub").html(`
				<option value="Veda">Veda</option>
				<option value="Vedanga">Vedanga</option>
				<option value="Upaveda">Upaveda</option>
				<option value="Itihasa and Puranas">Itihasa and Puranas</option>
				<option value="Darshanas">Darshanas</option>
				<option value="Dharmashastras">Dharmashastras</option>
				<option value="Regional Language sources">Regional Language sources</option>
			`);
		}
	});


	$("#present_research_field_interest" ).change(function() {
		var value = $("#present_research_field_interest").val();
		if (value == "Science, Engineering, Technology") {
			$("#present_research_field_interest_sub").html(`
				<option value="Engineering & Technology">Engineering & Technology</option>
				<option value="Town planning architecture">Town planning architecture</option>
				<option value="Sustainibility, Environment">Sustainibility, Environment</option>
				<option value="Mathematics & Computing">Mathematics & Computing</option>
				<option value="Astronomy">Astronomy</option>
				<option value="life sciences, Biology, Zoology">life sciences, Biology, Zoology</option>
				<option value="Geography">Geography</option>
				<option value="Physics">Physics</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Cosmology, Origins of Universe">Cosmology, Origins of Universe</option>
				<option value="Craftmanship, Trades, Skills">Craftmanship, Trades, Skills</option>
			`);
		} else if (value == "Health, Wellness") {
			$("#present_research_field_interest_sub").html(`
				<option value="Anatomy, Physiology">Anatomy, Physiology</option>
				<option value="Surgery">Surgery</option>
				<option value="Medicine">Medicine</option>
				<option value="Medical administration, Management">Medical administration, Management</option>
				<option value="Child care, Geriatry">Child care, Geriatry</option>
				<option value="Pharmacology">Pharmacology</option>
				<option value="Integrated health">Integrated health</option>
				<option value="Dietology">Dietology</option>
			`);
		} else if (value == "Psychology, Cognition, linguistics, Phoenetics,  Epistomology") {
			$("#present_research_field_interest_sub").html(`
				<option value="Linguistics">Linguistics</option>
				<option value="Phoenetics">Phoenetics</option>
				<option value="Cognition">Cognition</option>
				<option value="Psychology">Psychology</option>
				<option value="Epistemology">Epistemology</option>
				<option value="Personality">Personality</option>
			`);
		} else if (value == "Management, Administration, Law, Governance") {
			$("#present_research_field_interest_sub").html(`
				<option value="Public administration">Public administration</option>
				<option value="Law, Jurispudence">Law, Jurispudence</option>
				<option value="Management, Process driven development">Management, Process driven development</option>
				<option value="Leadership">Leadership</option>
			`);
		} else if (value == "Art, literature, Culture, Aesthetics folklore, Education") {
			$("#present_research_field_interest_sub").html(`
				<option value="Literature, Language, Music">Literature, Language, Music</option>
				<option value="Folklore traditions">Folklore traditions</option>
				<option value="Education systems">Education systems</option>
				<option value="Education methods">Education methods</option>
				<option value="Aesthetics">Aesthetics</option>
			`);
		} else if (value == "Indian Traditional Knowledge Base") {
			$("#present_research_field_interest_sub").html(`
				<option value="Veda">Veda</option>
				<option value="Vedanga">Vedanga</option>
				<option value="Upaveda">Upaveda</option>
				<option value="Itihasa and Puranas">Itihasa and Puranas</option>
				<option value="Darshanas">Darshanas</option>
				<option value="Dharmashastras">Dharmashastras</option>
				<option value="Regional Language sources">Regional Language sources</option>
			`);
		}
	});


	$("#future_research_field_interest" ).change(function() {
		var value = $("#future_research_field_interest").val();
		if (value == "Science, Engineering, Technology") {
			$("#future_research_field_interest_sub").html(`
				<option value="Engineering & Technology">Engineering & Technology</option>
				<option value="Town planning architecture">Town planning architecture</option>
				<option value="Sustainibility, Environment">Sustainibility, Environment</option>
				<option value="Mathematics & Computing">Mathematics & Computing</option>
				<option value="Astronomy">Astronomy</option>
				<option value="life sciences, Biology, Zoology">life sciences, Biology, Zoology</option>
				<option value="Geography">Geography</option>
				<option value="Physics">Physics</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Cosmology, Origins of Universe">Cosmology, Origins of Universe</option>
				<option value="Craftmanship, Trades, Skills">Craftmanship, Trades, Skills</option>
			`);
		} else if (value == "Health, Wellness") {
			$("#future_research_field_interest_sub").html(`
				<option value="Anatomy, Physiology">Anatomy, Physiology</option>
				<option value="Surgery">Surgery</option>
				<option value="Medicine">Medicine</option>
				<option value="Medical administration, Management">Medical administration, Management</option>
				<option value="Child care, Geriatry">Child care, Geriatry</option>
				<option value="Pharmacology">Pharmacology</option>
				<option value="Integrated health">Integrated health</option>
				<option value="Dietology">Dietology</option>
			`);
		} else if (value == "Psychology, Cognition, linguistics, Phoenetics,  Epistomology") {
			$("#future_research_field_interest_sub").html(`
				<option value="Linguistics">Linguistics</option>
				<option value="Phoenetics">Phoenetics</option>
				<option value="Cognition">Cognition</option>
				<option value="Psychology">Psychology</option>
				<option value="Epistemology">Epistemology</option>
				<option value="Personality">Personality</option>
			`);
		} else if (value == "Management, Administration, Law, Governance") {
			$("#future_research_field_interest_sub").html(`
				<option value="Public administration">Public administration</option>
				<option value="Law, Jurispudence">Law, Jurispudence</option>
				<option value="Management, Process driven development">Management, Process driven development</option>
				<option value="Leadership">Leadership</option>
			`);
		} else if (value == "Art, literature, Culture, Aesthetics folklore, Education") {
			$("#future_research_field_interest_sub").html(`
				<option value="Literature, Language, Music">Literature, Language, Music</option>
				<option value="Folklore traditions">Folklore traditions</option>
				<option value="Education systems">Education systems</option>
				<option value="Education methods">Education methods</option>
				<option value="Aesthetics">Aesthetics</option>
			`);
		} else if (value == "Indian Traditional Knowledge Base") {
			$("#future_research_field_interest_sub").html(`
				<option value="Veda">Veda</option>
				<option value="Vedanga">Vedanga</option>
				<option value="Upaveda">Upaveda</option>
				<option value="Itihasa and Puranas">Itihasa and Puranas</option>
				<option value="Darshanas">Darshanas</option>
				<option value="Dharmashastras">Dharmashastras</option>
				<option value="Regional Language sources">Regional Language sources</option>
			`);
		}
	});
	
	// Submit Form and Send the Mail
	$("#btnSubmit").click(() => {
		swal({
			title: "Are you sure you like to submit the form?",
			text: "",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		  })
		  .then((willDelete) => {
			if (willDelete) {
			  swal("Successfully Submitted", {
				icon: "success",
			  }).then(() => {
				$("#iks_form").submit();  
			  })
			} else {
			  swal("Your imaginary file is safe!");
			}
		  });
	});

});