function UnControlledComponet() {
    function handleSubmit(e) {
        e.preventDefault();
        let fname = document.getElementById("fname").value;
        let lname = document.getElementById("lname").value;

        console.log("Welcome ",fname, lname);
    }

    return <>
        <form onSubmit={handleSubmit}>
            <input type="text" name="fname" id="fname" required placeholder="Enter First Name"  /> <br />
            <input type="text" name="lname" id="lname" required placeholder="Enter Last Name" /> <br />
            <input type="submit" value="Send Data"></input>
        </form>
    </>
}

export default UnControlledComponet;