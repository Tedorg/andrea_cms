import { toggleClass, select } from './helpers.js';
import dynamics from 'dynamics.js';
export default (button_element) => {
  /*
  pass in a button elment. 
  add a eventlisener, open list on click. list all item in localstoprage
  mark list as active,
  submit list to emailaddress.

  	*/
  // External JS: JS Helper Functions
  // External JS: Dynamics JS
  var btnOpen = select('.js-open');
  var btnClose = select('.js-close');
  var modal = select('.js-modal');
  var tomail = select('.tomail');
  var modalChildren = modal.children;

  function hideModal() {
    dynamics.animate(modal, {
      opacity: 0,
      translateY: 100
    }, {
      type: dynamics.spring,
      frequency: 0,
      friction: 600,
      duration: 1500
    });
  }

  function showModal() {
    doShowAll()
    // Define initial properties
    dynamics.css(modal, {
      opacity: 0,
      scale: .5
    });
    // Animate to final properties
    dynamics.animate(modal, {
      opacity: 1,
      scale: 1
    }, {
      type: dynamics.spring,
      frequency: 1,
      friction: 400,
      duration: 1000
    });
  }

  function showBtn() {
    dynamics.css(btnOpen, {
      opacity: 0
    });
    dynamics.animate(btnOpen, {
      opacity: 1
    }, {
      type: dynamics.linear,
      frequency: 300,
      friction: 400,
      duration: 800
    });
  }

  function showModalChildren() {
    // Animate each child individually
    for (var i = 0; i < modalChildren.length; i++) {
      var item = modalChildren[i];
      // Define initial properties
      dynamics.css(item, {
        opacity: 0,
        translateY: 30
      });
      // Animate to final properties
      dynamics.animate(item, {
        opacity: 1,
        translateY: 0
      }, {
        type: dynamics.linear,
        frequency: 300,
        friction: 0,
        duration: 10,
        delay: 100 + i * 40
      });
    }
  }

  function getMailtoUrl(to, subject, body) {
    var args = [];
    if (typeof subject !== 'undefined') {
      args.push('subject=' + encodeURIComponent(subject));
    }
    if (typeof body !== 'undefined') {
      args.push('body=' + encodeURIComponent(body))
    }
    var url = 'mailto:' + encodeURIComponent(to);
    if (args.length > 0) {
      url += '?' + args.join('&');
    }
    return url;
  }

  function tableToString(table) {
    var data = []; // first row needs to be headers 
    var headers = [];
    var r = "";
    for (var i = 0; i < table.rows[0].cells.length; i++) {
      headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi, '');
    }
    // go through cells
    for (var i = 1; i < table.rows.length; i++) {
      var tableRow = table.rows[i];
      var rowData = {};
      for (var j = 0; j < tableRow.cells.length - 1; j++) {
        var amount;
        var id;
        console.log(tableRow.cells[j].innerHTML);
        if (tableRow.cells[j].getElementsByTagName('input')[0]) {
          amount = tableRow.cells[j].getElementsByTagName('input')[0].value;
        } else {
          id = tableRow.cells[j].innerHTML;
        }
      }
      r += id + "\t\t\t" + amount + "\n";
      data.push(rowData);
    }
    console.log(getMailtoUrl("rueger", "Web order", r));
    window.location.href = getMailtoUrl("rueger", "Web order", r) // console.log(data)
    return data;
  }

  function toggleClasses() {
    toggleClass(btnOpen, 'is-active');
    toggleClass(modal, 'is-active');
  }
  // Open nav when clicking sandwich button
  btnOpen.addEventListener('click', function(e) {
    toggleClasses();
    showModal();
    showModalChildren();
  });
  // Open nav when clicking sandwich button
  btnClose.addEventListener('click', function(e) {
    hideModal();
    dynamics.setTimeout(toggleClasses, 500);
    dynamics.setTimeout(showBtn, 500);
  });
  tomail.addEventListener('click', function(e) {
    tableToString(document.getElementById('merklist'))
  });
  const whishlist = document.querySelectorAll(".addtolist");
  whishlist.forEach(item => {
    item.addEventListener('click', event => {
      let productId = event.target.getAttribute("data");
      SaveItem(productId)
    })
  });

  function SaveItem(value) {
    var record = value.split(",");
    var name = record[0];
    var data = JSON.stringify({ "id": record[0], "max": record[1] });
    localStorage.setItem(name, data);
    doShowAll();
  }

  function CheckBrowser() {
    if ('localStorage' in window && window['localStorage'] !== null) {
      // We can use localStorage object to store data.
      return true;
    } else {
      return false;
    }
  }
  var addButtonRemove = function(key) {
    var button = document.createElement('button');
    button.innerHTML = 'remove this Item';
    button.value = key;
    button.onclick = function() {
      localStorage.removeItem(button.value);
      doShowAll()
      return false;
    };
    // where do we want to have the button to appear?
    // you can append it to another element just by doing something like
    // document.getElementById('foobutton ').appendChild(button);
    return button;
  };
  var addButtonField = function(key) {
    var data = localStorage.getItem(key)
    var jsonData = JSON.parse(data)
    var input = document.createElement('input');
    input.value = '1';
    input.type = "number"
    input.max = jsonData["max"]
    // where do we want to have the button to appear?
    // you can append it to another element just by doing something like
    // document.getElementById('foobutton ').appendChild(button);
    return input;
  };

  function doShowAll() {
    if (CheckBrowser()) {
      var key = "";
      //var list = `<tr><th>Item</th><th>Amount</th><th>Remove</th></tr>`;
      var i = 0;
      const table = document.getElementById('merklist');
      table.innerHTML = ""
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(1);
      var cell3 = row.insertCell(2);
      cell1.innerHTML = "Item";
      cell2.innerHTML = "Amount";
      cell3.innerHTML = "edit";
      //For a more advanced feature, you can set a cap on max items in the cart.
      for (i = 0; i <= localStorage.length - 1; i++) {
        key = localStorage.key(i);
        const jsonData = JSON.parse(localStorage.getItem(key))
        var row = table.insertRow(i + 1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        cell1.innerHTML = jsonData["id"];
        cell2.appendChild(addButtonField(key));
        cell3.appendChild(addButtonRemove(key));
      }
      //If no item exists in the cart.
      //Bind the data to HTML table.
      //You can use jQuery, too.
      //document.getElementById('merklist').innerHTML = list;
    } else {
      alert('Cannot save shopping list as your browser does not support HTML 5');
    }
  }
};
