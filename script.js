

//"The question didn’t mention JavaScript validation; I just wrote it as an example."


function validation(){
    let isValid = true;
    const name = document.getElementById('name').value;
    if(name.length < 3)
    {
        document.getElementById('nameError').innerHTML = 'Name must be at least 3 character<br>';
        isValid = false;
    }
    return isValid;
}

// document.getElementById('data').addEventListener('submit', function(e){
//     e.preventDefault();
//     const name = document.getElementById('name').value;
//     if(name.length < 3)
//     {
//         document.getElementById('nameError').textContent = 'Name must be at least 3 character';
//         isValid = false;
//     }
//     else{
//         this.submit();
//     }
// })