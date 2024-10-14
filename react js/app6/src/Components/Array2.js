function Array2(){
    const data = ["Rajkot", "Surat", "Baroda", "Ahamdabad", "Bhuj"];
    return <>
        <h1>Example of Array in React JS</h1>
        <ul>
            {
                data.map((city) => <li>
                    {city}
                </li>)
            }
        </ul>
    </>
}

export default Array2;