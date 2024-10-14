function Array3(){
    const data = ["Rajkot", "Surat", "Baroda", "Ahamdabad", "Bhuj"];

    for(let i=0; i<data.length; i++){
        console.log("Welcome to", data[i]);
    }
    return <>
        <h1>Example of Array in React JS</h1>
        <ul>
            {
                data.map((city) => <li>
                    {city}
                </li>)
            }

            {
                // for(let i=0; i<data.length; i++){

                // }
            }
        </ul>
    </>
}

export default Array3;