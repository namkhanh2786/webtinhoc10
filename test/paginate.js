const itemsPerPage = 1; // The number of items per page

$(document).ready(function(){
    function initializeTable() {
        $.ajax({
           url: "index.php",
           type: "GET",
           dataType: "json",
           data: {items_per_page: itemsPerPage},
           success: function(response) {
               const tableRows = response;
               const tableSize = tableRows.length;
               const pageCount = Math.ceil(tableSize / itemsPerPage);
               
               generatePaginationButtons(pageCount);
               generateTable(0, itemsPerPage, tableRows);
           },
           error: function(xhr){
               console.log(xhr.responseText);
           }
        });
     }

     initializeTable();

     function generateTable(startIndex, endIndex, tableRows) {
         const tbody = $("#danhsach tbody");
         tbody.empty();

         for (let i = startIndex; i < endIndex; i++) {
             const row = tableRows[i];

             if (!row) break;

             const tr = $("<tr>");

             const tdid = $("<td>");
             tdid.text(row.id);
             tr.append(tdid);

             const tdName = $("<td>");
             tdName.text(row.name);
             tr.append(tdName);

             const tdauthor = $("<td>");
             tdauthor.text(row.author);
             tr.append(tdauthor);

             const tdgerne = $("<td>");
             tdgerne.text(row.gerne);
             tr.append(tdgerne);

             tbody.append(tr);
         }
     }

     function generatePaginationButtons(pageCount) {
         const container = $("#pagination-container");
         container.empty();

         for (let i = 1; i <= pageCount; i++) {
             const button = $("<button>");
             button.addClass("pagination-button");

             if (i === 1) button.addClass("active");

             button.text(i);

             button.click(function() {
                 const startIndex = (i - 1) * itemsPerPage;
                 const endIndex = startIndex + itemsPerPage;

                 $.ajax({
                     url: "index.php",
                     type: "GET",
                     dataType: "json",
                     data: {items_per_page: itemsPerPage, start_index: startIndex},
                     success: function(response) {
                         generateTable(startIndex, endIndex, response);

                         const previousActiveButton = $(".pagination-button.active");
                         previousActiveButton.removeClass("active");

                         button.addClass("active");
                     },
                     error: function(xhr){
                         console.log(xhr.responseText);
                     }
                 });
             });

             container.append(button);
         }
     }

    $("form").submit(function(e) {
        e.preventDefault();
        
        const searchQuery = $(this).find('input[name="search"]').val();
        if (!searchQuery.trim()) return;

        $.ajax({
           url: "index.php",
           type: "GET",
           dataType: "json",
           data: {search: searchQuery, items_per_page: itemsPerPage},
           success: function(response) {
               const tableRows = response;
               const tableSize = tableRows.length;
               const pageCount = Math.ceil(tableSize / itemsPerPage);
               
               generatePaginationButtons(pageCount);
               generateTable(0, itemsPerPage, tableRows);
           },
           error: function(xhr){
               console.log(xhr.responseText);
           }
        });
        return false;
    });
});
