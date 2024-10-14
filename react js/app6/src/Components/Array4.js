function Array4() {
    const data = [
        { roll: 1, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 2, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 3, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 4, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 5, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 6, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 7, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 8, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 9, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 10, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 11, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 12, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 13, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 14, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 15, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 16, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 17, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 18, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 19, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" },
        { roll: 20, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road" }
    ];
    return <>
        <div className="table-responsive">
            <table className="table table-hover table-striped">
                <thead>
                    <tr className="table-dark">
                        <th>Key / Index</th>
                        <th>Roll</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>

                <tbody>
                    {
                        data.map((student, key) => <tr key={key}>
                            <td>{key}</td>
                            <td>{student.roll}</td>
                            <td>{student.fname}</td>
                            <td>{student.lname}</td>
                            <td>{student.city}</td>
                            <td>{student.gender}</td>
                            <td>{student.phone}</td>
                            <td>{student.address}</td>
                        </tr>)
                    }
                </tbody>
            </table>
        </div>
    </>
}

export default Array4;