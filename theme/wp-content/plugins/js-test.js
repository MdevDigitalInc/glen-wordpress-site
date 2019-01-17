jQuery( document ).on( 'click', '#btnUpdate', function($) {
  

  var id = document.getElementById("txt_id").value;
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("txt_title").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("dd_tid").value;
  var avatar = document.getElementById("txt_avatar").value;
  

  var query = 'UPDATE tblEmployees SET Name = "' + name + '", Title = "' + title + '", History = "' + history + '", Quote = "' + quote + '", TeamID = ' + teamId + ', Avatar = "' + avatar + '" WHERE ID = ' + id + ';'

  alert(query);

  var data = {
    'action': 'my_action',
    'query': query
  };

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + response);
  });
});

jQuery( document ).on( 'click', '#btnCreate', function($) {
  
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("txt_title").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("dd_tid").value;
  var avatar = document.getElementById("txt_avatar").value;


  var query = "INSERT INTO tblEmployees (Name, Title, History, Quote, TeamID, Avatar) VALUES( '" + name + "', '" + title + "', '" + history + "','" + quote + "'," + teamId + ", '"+avatar+"');"

  alert(query);

  var data = {
    'action': 'my_action',
    'query': query
  };

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + response);
  });
});



jQuery( document ).on( "change", "#ddEmp", function() {
  
  var id = document.getElementById("ddEmp").value;

  var query = "Select * from tblEmployees where ID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    //alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      document.getElementById("txt_id").value =  response[0].ID;
      document.getElementById("txt_title").value =  response[0].Title;
      document.getElementById("txt_name").value =  response[0].Name;
      document.getElementById("txt_history").value =  response[0].History;
      document.getElementById("txt_quote").value =  response[0].Quote;
      document.getElementById("dd_tid").value =  response[0].TeamID;
      document.getElementById("txt_avatar").value =  response[0].Avatar;
      document.getElementById("btnUpdate").hidden = false;
      (document.getElementById("btnCreate")).hide();
    }else{
      document.getElementById("txt_id").value = "";
      document.getElementById("txt_name").value =  "";
      document.getElementById("txt_title").value =  "";
      document.getElementById("txt_history").value =  "";
      document.getElementById("txt_quote").value =  "";
      document.getElementById("dd_tid").value =  "";
      document.getElementById("txt_avatar").value =  "";
      document.getElementById("btnUpdate").css("visibility", "hidden");
      ("#btnCreate").css("visibility", "visible");
    }
  });

});


jQuery( document ).on( "change", "#ddTeam", function() {
  
  var id = document.getElementById("ddTeam").value;
  alert(id);
  var query = "Select ID, Name from tblEmployees where TeamID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  var msTM = document.getElementById('msTeamMemebers');
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      jQuery.each(response, function(key,values) {
        var option = new Option(values.Name,values.ID);
        msTM.append(option);
      });
    }else{
    }
  });

});

// FAQ

jQuery( document ).on( 'click', '#btnFAQUpdate', function($) {
  
  var id = document.getElementById("txt_FAQid").value;
  var question = document.getElementById("txt_FAQquestion").value;
  var answer = document.getElementById("txt_FAQanswer").value;

  var query = 'UPDATE tblFAQ SET Question = "' + question + '", Answer = "' + answer + '" WHERE ID = ' + id + ';';

  alert(query);

  var data = {
    'action': 'my_action',
    'query': query
  };

  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    alert('Got this from the server: ' + response);
  });
});

jQuery( document ).on( "change", "#ddFAQ", function() {
  
  var id = document.getElementById("ddFAQ").value;

  var query = "Select * from tblFAQ where ID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    //alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      document.getElementById("txt_FAQid").value =  response[0].ID;
      document.getElementById("txt_FAQquestion").value =  response[0].Question;
      document.getElementById("txt_FAQanswer").value =  response[0].Answer;
    }else{
      document.getElementById("txt_id").value = "";
      document.getElementById("txt_name").value =  "";
      document.getElementById("txt_title").value =  "";
    }
  });

});
