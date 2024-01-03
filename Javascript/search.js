const SearchBar = document.querySelector(".users .search input"),
SearchBtn = document.querySelector(".users .search button");

SearchBtn.onclick = ()=> {
    SearchBar.classList("active");
}