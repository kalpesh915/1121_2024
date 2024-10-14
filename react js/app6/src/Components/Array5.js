function Array5() {
    const data = [
        { roll: 1, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 2, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 3, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 4, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 5, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 6, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python"] },
        { roll: 7, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python", ".net"] },
        { roll: 8, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python", ".net"]  },
        { roll: 9, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Python", ".net"]  },
        { roll: 10, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 11, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 12, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 13, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 14, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node", "C#"]  },
        { roll: 15, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 16, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node", "Advance Java"]  },
        { roll: 17, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 18, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 19, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node"]  },
        { roll: 20, fname: "Khushbu", lname: "Kaneriya", city: "Rajkot", gender: "Female", phone: "9988776655", address: "Raiya Road", languages:["PHP", "Java", "Node", "JS"]  }
    ];
    return <>
        <div className="table-responsive">
            <table className="table table-hover table-striped">
                <thead>
                    <tr className="table-dark">
                        <th>Roll</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Languages</th>
                    </tr>
                </thead>

                <tbody>
                    {
                        data.map((student, key) => <tr key={key}>
                            <td>{student.roll}</td>
                            <td>{student.fname}</td>
                            <td>{student.lname}</td>
                            <td>{student.city}</td>
                            <td>{student.gender}</td>
                            <td>{student.phone}</td>
                            <td>{student.address}</td>
                            {/* <td>{student.languages}</td> */}
                            <td>{
                                student.languages.map((lang)=> <span>{lang}, </span>)
                            }</td>
                        </tr>)
                    }
                </tbody>
            </table>
        </div>
    </>
}

export default Array5;