const tableRows = [
    { rank: 1, name: "Domenic", points: "88,110", team: "dcode" },
    { rank: 2, name: "Sally", points: "72,400", team: "Students" },
    { rank: 3, name: "Nick", points: "52,300", team: "dcode" },
    // Add more rows here as needed...
  ]; //phần tử thêm vào (key: value)
  
  const itemsPerPage = 2; //số item có thể chứa trong mỗi phân trang
  
  function generateTable(startIndex, endIndex)
  //startIndex và endIndex là chỉ số của hàng đầu tiên và hàng cuối cùng trong bảng mà 
  //chúng ta muốn hiển thị trên trang hiện tại.
  //Ví dụ, nếu đang ở trang 2, và có tổng cộng 20 hàng được hiển thị trên 2 trang, thì startIndex sẽ là 10 và endIndex sẽ là 20. 
  //Bằng cách này, chúng ta có thể xác định từng phần của tập dữ liệu và hiển thị các phần tử tương ứng.
  {
    const tbody = document.querySelector("#danhsach tbody"); 
    //lấy phần tử tbody thuộc table có id: "danhsach" và gán vào biến tbody thông qua hàm document.querySelector
    tbody.innerHTML = "";
    //xóa nội dung hiện tại của tbody => có thể thêm sách mới vào bảng mà không cần phải 
    //loại bỏ các sách cũ trước khi thêm. (bởi vì trước khi được gán giá trị thì tbody đang chứa giá trị các sách cũ khác)
  
    for (let i = startIndex; i < endIndex; i++) {
      const row = tableRows[i];
      //Ví dụ: nếu startIndex là 0 và endIndex là 10, 
      //vòng lặp sẽ được thực thi 10 lần, mỗi lần tạo ra một hàng mới cho table HTML. 
      //Với mỗi giá trị i, chúng ta lấy tableRows[i] để truy cập vào thông tin của hàng 
      //tương ứng và sử dụng các thông tin này để tạo ra các phần tử HTML (các cột) cho hàng đó.
  
      if (!row) break;
  
      const tr = document.createElement("tr"); //tạo một row mới trong table dựa trên vòng lặp
  
      const tdRank = document.createElement("td"); //tạo một phần tử mới trong một row
      tdRank.textContent = row.rank; 
      //gán thuộc tính textContent với giá trị tương ứng của row (ví dụ: row.rank, row.name, row.points, row.team)
      //Ví dụ, nếu đối tượng row có thuộc tính rank là "1st", 
      //thì khi tdRank.textContent = row.rank; được gọi, nội dung văn bản trong ô <td> "Rank" sẽ là "1st".
      tr.appendChild(tdRank);
      //phương thức tr.appendChild() để thêm các phần tử <td> vào hàng (tr).
  
      const tdName = document.createElement("td"); //tạo một phần tử mới trong một row
      tdName.textContent = row.name;
      tr.appendChild(tdName);
  
      const tdPoints = document.createElement("td"); //tạo một phần tử mới trong một row
      tdPoints.textContent = row.points;
      tr.appendChild(tdPoints);
  
      const tdTeam = document.createElement("td"); //tạo một phần tử mới trong một row
      tdTeam.textContent = row.team;
      tr.appendChild(tdTeam);
  
      tbody.appendChild(tr);
    }
  }
  
  function generatePaginationButtons(pageCount) {
    const container = document.querySelector("#pagination-container");
    container.innerHTML = ""; //tránh hiển thị sai các nút phân trang
    //tạo phân trang dựa trên số trang
  
    for (let i = 1; i <= pageCount; i++) {
      const button = document.createElement("button");
      button.setAttribute("id", "pg-button"); // Giống đặt id cho thẻ HTML :)
      button.classList.add("pagination-button"); //tạo nút chuyển trang
  
      if (i === 1) button.classList.add("active"); //mặc định nút active sẽ ở phân trang đầu tiên
  
      button.textContent = i;
  
      button.addEventListener("click", () => //khi nhấp chuột
      {
        const startIndex = (i - 1) * itemsPerPage; //tính startindex của phân trang ta vừa bấm
        //Ví dụ: nếu i là 2 và itemsPerPage là 10, startIndex sẽ là 10 (tức là hàng đầu tiên trong bảng sẽ bắt đầu từ hàng thứ 11).
        const endIndex = startIndex + itemsPerPage; //tính endindex của phân trang, vì đã có startindex và mặc định itemsperpage nên dễ dàng tính được điểm cuối của phân trang đó
  
        generateTable(startIndex, endIndex);
  
        // Update active button
        const previousActiveButton = document.querySelector(".pagination-button.active");
        previousActiveButton.classList.remove("active");
  
        button.classList.add("active");
      });
  
      container.appendChild(button);
    }
  }
  
  function initializeTable() {
    const tableSize = tableRows.length; //gán giá trị của tổng rows trong các phân trang
    const pageCount = Math.ceil(tableSize / itemsPerPage); //tính số phân trang cần tạo dựa trên công thức 
    //(tổng số hàng / số hàng tối đa trong mỗi phân trang) rồi làm tròn xuống thành số nguyên dương
  
    generatePaginationButtons(pageCount); //gọi hàm
    generateTable(0, itemsPerPage); //bắt đầu từ index 0 đến số phần tử nhiều nhất trong một phân trang
  }
  
  initializeTable();