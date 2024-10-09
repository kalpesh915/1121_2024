function Event2(){
    function greetings(username){
        alert("Welcome "+username+" to world of React JS");
    }
    return <>
        <h1>Example of Event</h1>
        <button onClick={greetings("Khushbu Kaneriya")}>Click Me</button>
    </>
}

export default Event2;