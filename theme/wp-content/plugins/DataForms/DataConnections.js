// Team Admin

  // UPDATE (TEAM MEMBER)

jQuery( document ).on( 'click', '#btnUpdate', function($) {

  var id = document.getElementById("txt_id").value;
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("txt_title").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("dd_tid").value;
  var avatar = document.getElementById("dd_avatar").value;
  

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

  // CREATE (TEAM MEMBER)

jQuery( document ).on( 'click', '#btnCreate', function($) {
  
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("txt_title").value;
  var history = document.getElementById("txt_history").value;
  var quote = document.getElementById("txt_quote").value;
  var teamId = document.getElementById("dd_tid").value;
  var avatar = document.getElementById("dd_avatar").value;


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

  // READ (TEAM MEMBER)

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
      document.getElementById("dd_avatar").value =  response[0].Avatar;
      document.getElementById("btnUpdate").hidden = false;
      (document.getElementById("btnCreate")).hide();
    }else{
      document.getElementById("txt_id").value = "";
      document.getElementById("txt_name").value =  "";
      document.getElementById("txt_title").value =  "";
      document.getElementById("txt_history").value =  "";
      document.getElementById("txt_quote").value =  "";
      document.getElementById("dd_tid").value =  "";
      document.getElementById("dd_avatar").value =  "";
      document.getElementById("btnUpdate").css("visibility", "hidden");
      ("#btnCreate").css("visibility", "visible");
    }
  });

});

  // DELETE (TEAM MEMBER)

jQuery( document ).on( 'click', '#btnDelete', function($) {

  var id = document.getElementById("txt_id").value;
  var selectReset = document.getElementById("ddEmp");

  try {
    if (id >= 0) {
      var query = 'DELETE FROM tblEmployees where ID = ' + id + ';';
    } else {
      throw "Failed on (id >= 0).";
    }

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    jQuery.post(ajaxurl, data, function(response) {
      alert('Success!');
      console.log('Response:' + response);
    });

    document.getElementById("txt_id").value = "";
    document.getElementById("txt_name").value =  "";
    document.getElementById("txt_title").value =  "";
    document.getElementById("txt_history").value =  "";
    document.getElementById("txt_quote").value =  "";
    document.getElementById("dd_tid").value =  "";
    document.getElementById("dd_avatar").value =  "";
    selectReset.selectedIndex = 0;

    // NYI: Refresh #ddEmp since now it should not show the deleted option

  } catch (err) {
    alert('Something went wrong while deleting!');
    console.log(err);
  }
});

  // ???

jQuery( document ).on( "change", "#ddTeam", function() {
  
  var id = document.getElementById("ddTeam").value;
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

  // UPDATE (FAQ)

  jQuery( document ).on( 'click', '#btnFAQUpdate', function($) {
  
    var id = document.getElementById("txt_FAQid").value;
    var question = document.getElementById("txt_FAQquestion").value;
    var answer = document.getElementById("txt_FAQanswer").value;
  
    var query = 'UPDATE tblFAQ SET Question = "' + question + '", Answer = "' + answer + '" WHERE ID = ' + id + ';';
  
    var data = {
      'action': 'my_action',
      'query': query
    };
  
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    try {
      jQuery.post(ajaxurl, data, function(response) {
        alert('Success!');
        console.log('Response:' + response);
      });
    } catch (err) {
      alert('Something went wrong while updating!');
      console.log(err);
    }
  });

  // CREATE

jQuery( document ).on( 'click', '#btnFAQCreate', function($) {

  var question = document.getElementById("txt_FAQquestion").value;
  var answer = document.getElementById("txt_FAQanswer").value;

  var query = "INSERT INTO tblFAQ (question, answer) VALUES( '" + question + "', '" + answer +"');";

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



  // READ (FAQ)

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
    } else {
      document.getElementById("txt_FAQid").value = "";
      document.getElementById("txt_FAQquestion").value =  "";
      document.getElementById("txt_FAQanswer").value =  "";
    }
  });
});

  // DELETE (FAQ)

jQuery( document ).on( 'click', '#btnFAQDelete', function($) {

  var id = document.getElementById("txt_FAQid").value;
  var selectReset = document.getElementById("ddFAQ");

  try {
    if (id >= 0) {
      var query = 'DELETE FROM tblFAQ WHERE ID = ' + id + ';';
    } else {
      throw "Failed on (id >= 0).";
    }

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    jQuery.post(ajaxurl, data, function(response) {
      alert('Success!');
      console.log('Response:' + response);
    });

    document.getElementById("txt_FAQid").value = "";
    document.getElementById("txt_FAQquestion").value =  "";
    document.getElementById("txt_FAQanswer").value =  "";
    selectReset.selectedIndex = 0;

    // NYI: Refresh #ddFAQ since now it should not show the deleted option

  } catch (err) {
    alert('Something went wrong while deleting!');
    console.log(err);
  }
});

  // ??? (FAQ)

jQuery( document ).on( "change", "#ddFAQ", function() {

});





// Testimony

  // UPDATE (Testimony)

  jQuery( document ).on( 'click', '#btnTestUpdate', function($) {
  
    var id = document.getElementById("txt_Testid").value;
    var author = document.getElementById("txt_Testauthor").value;
    var text = document.getElementById("txt_Testtext").value;
    var pageId = document.getElementById("dd_Testid").value;
  
    var query = 'UPDATE tblTestimony SET Author = "' + author + '", Text = "' + text + '", pageId = '+pageId+' WHERE ID = ' + id + ';';
  
    var data = {
      'action': 'my_action',
      'query': query
    };
  
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    try {
      jQuery.post(ajaxurl, data, function(response) {
        alert('Success!');
        console.log('Response:' + response);
      });
    } catch (err) {
      alert('Something went wrong while updating!');
      console.log(err);
    }
  });

  // CREATE (Testimony)

jQuery( document ).on( 'click', '#btnTestCreate', function($) {

  var author = document.getElementById("txt_Testauthor").value;
    var text = document.getElementById("txt_Testtext").value;
    var pageId = document.getElementById("dd_Testid").value;

  var query = "INSERT INTO tblTestimony (Author, Text, pageId) VALUES( '" + author + "', '" + text +"', "+pageId+");";

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



  // READ (Testimony)

jQuery( document ).on( "change", "#ddTest", function() {
  
  var id = document.getElementById("ddTest").value;

  var query = "Select * from tblTestimony where ID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    //alert('Got this from the server: ' + JSON.stringify(response));
    if( response.length > 0)
    {
      document.getElementById("txt_Testid").value =  response[0].ID;
      document.getElementById("txt_Testauthor").value =  response[0].Author;
      document.getElementById("txt_Testtext").value =  response[0].Text;
      document.getElementById("dd_Testid").value =  response[0].pageId;
    } else {
      document.getElementById("txt_Testid").value = "";
      document.getElementById("txt_Testauthor").value = "";
      document.getElementById("txt_Testtext").value = "";
      document.getElementById("dd_Testid").value = "";
    }
  });
});

  // DELETE (Testimony)

jQuery( document ).on( 'click', '#btnTestDelete', function($) {

  var id = document.getElementById("txt_Testid").value;
  var selectReset = document.getElementById("ddTest");

  try {
    if (id >= 0) {
      var query = 'DELETE FROM tblTestimony WHERE ID = ' + id + ';';
    } else {
      throw "Failed on (id >= 0).";
    }

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    jQuery.post(ajaxurl, data, function(response) {
      alert('Success!');
      console.log('Response:' + response);
    });

    document.getElementById("txt_Testid").value = "";
    document.getElementById("txt_Testauthor").value =  "";
    document.getElementById("txt_Testtext").value =  "";
    document.getElementById("dd_Testid").value = "";
    selectReset.selectedIndex = 0;

    // NYI: Refresh #ddFAQ since now it should not show the deleted option

  } catch (err) {
    alert('Something went wrong while deleting!');
    console.log(err);
  }
});

//End Testimony



// Menu

  // UPDATE (Menu)

  jQuery( document ).on( 'click', '#btnMenuUpdate', function($) {
  
    var id = document.getElementById("txt_Menuid").value;
    var text = document.getElementById("txt_Menutext").value;
    var week = document.getElementById("dd_Menuweek").value;
    var dow = document.getElementById("dd_MenuDOW").value;
    var tod = document.getElementById("dd_MenuTOD").value;
  
    var query = 'UPDATE tblMenu SET Name = "' + text + '", Week = ' + week + ', DOW = '+dow+', TOD = '+tod+' WHERE ID = ' + id + ';';
  
    var data = {
      'action': 'my_action',
      'query': query
    };
  
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    try {
      jQuery.post(ajaxurl, data, function(response) {
        alert('Success!');
        console.log('Response:' + response);
      });
    } catch (err) {
      alert('Something went wrong while updating!');
      console.log(err);
    }
  });

  // CREATE (Menu)

jQuery( document ).on( 'click', '#btnMenuCreate', function($) {

  var text = document.getElementById("txt_Menutext").value;
  var week = document.getElementById("dd_Menuweek").value;
  var dow = document.getElementById("dd_MenuDOW").value;
  var tod = document.getElementById("dd_MenuTOD").value;

  var query = "INSERT INTO tblTestimony (Name, Week, DOW, TOD) VALUES( '" + text + "', " + week +", "+dow+", "+tod+");";

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




// READ (MENU)

function readMenu()
{
  var week = document.getElementById("ddMenuWeek").value;
  var dow = document.getElementById("ddMenuDay").value;
  var tod = document.getElementById("ddMenuTime").value;

  if(week > 0 && dow > 0 && tod > 0 )
  {
    var query = "Select * from tblMenu where Week = " + week + " AND DOW = "+dow+" AND TOD = "+tod+";";

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    jQuery.post(ajaxurl, data, function(response) {
      //alert('Got this from the server: ' + JSON.stringify(response));
      if( response.length > 0)
      {
        document.getElementById("txt_Menuid").value = response[0].ID;
        document.getElementById("txt_Menutext").value = response[0].Name;
      } else {
        document.getElementById("txt_Menuid").value = "";
        document.getElementById("txt_Menutext").value = "";

      }
    });
  }
}


  // READ (Menu)

  jQuery( document ).on( "change", "#ddMenuWeek", function() {
    readMenu();
  });

  jQuery( document ).on( "change", "#ddMenuDay", function() {
    readMenu();
  });

  jQuery( document ).on( "change", "#ddMenuTime", function() {
    readMenu();
  });










  // DELETE (Menu)

jQuery( document ).on( 'click', '#btnTestDelete', function($) {

  var id = document.getElementById("txt_Menuid").value;
  var selectReset = document.getElementById("ddMenu");

  try {
    if (id >= 0) {
      var query = 'DELETE FROM tblMenu WHERE ID = ' + id + ';';
    } else {
      throw "Failed on (id >= 0).";
    }

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    jQuery.post(ajaxurl, data, function(response) {
      alert('Success!');
      console.log('Response:' + response);
    });

    document.getElementById("txt_Menuid").value = "";
      document.getElementById("txt_Menutext").value = "";
      document.getElementById("dd_Menuweek").value = "";
      document.getElementById("dd_MenuDOW").value = "";
      document.getElementById("dd_MenuTOD").value = "";
    selectReset.selectedIndex = 0;

    // NYI: Refresh #ddFAQ since now it should not show the deleted option

  } catch (err) {
    alert('Something went wrong while deleting!');
    console.log(err);
  }
});

//end Menu








//Board of Directors

jQuery( document ).on( 'click', '#btnDirUpdate', function($) {

  var id = document.getElementById("txt_id").value;
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("dd_title").value;
  

  var query = 'UPDATE tblDirectors SET Name = "' + name + '", Title = "' + title + '" WHERE ID = ' + id + ';'

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

  // CREATE (TEAM MEMBER)

jQuery( document ).on( 'click', '#btnDirCreate', function($) {
    
  var name = document.getElementById("txt_name").value;
  var title = document.getElementById("dd_title").value;

  var query = "INSERT INTO tblDirectors (Name, Title) VALUES( '" + name + "', '" + title + "');"

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

  // READ (TEAM MEMBER)

jQuery( document ).on( "change", "#ddDir", function() {
  
  var id = document.getElementById("ddDir").value;

  var query = "Select * from tblDirectors where ID = " + id;

  var data = {
    'action': 'my_action',
    'query': query
  };
  
  // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
  jQuery.post(ajaxurl, data, function(response) {
    
    if( response.length > 0)
    {
      //alert('Got this from the sefasdfasdfrver: ' + JSON.stringify(response));
      document.getElementById("txt_id").value =  response[0].ID;
      document.getElementById("dd_title").value =  response[0].Title;
      document.getElementById("txt_name").value =  response[0].Name;
    }else{
      document.getElementById("txt_id").value = "";
      document.getElementById("txt_name").value =  "";
      document.getElementById("dd_title").value =  "";
    }
  });
  
});

  // DELETE (TEAM MEMBER)

jQuery( document ).on( 'click', '#btnDirDelete', function($) {

  var id = document.getElementById("txt_id").value;
  var selectReset = document.getElementById("ddDir");

  try {
    if (id >= 0) {
      var query = 'DELETE FROM tblDirectors where ID = ' + id + ';';
    } else {
      throw "Failed on (id >= 0).";
    }

    var data = {
      'action': 'my_action',
      'query': query
    };
    
    jQuery.post(ajaxurl, data, function(response) {
      alert('Success!');
      console.log('Response:' + response);
    });

    document.getElementById("txt_id").value = "";
    document.getElementById("txt_name").value =  "";
    document.getElementById("txt_title").value =  "";
    selectReset.selectedIndex = 0;

    // NYI: Refresh #ddEmp since now it should not show the deleted option

  } catch (err) {
    alert('Something went wrong while deleting!');
    console.log(err);
  }
});