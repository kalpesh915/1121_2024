function User(Props) {
    return <>
        <div className="card col-md-6 my-3 p-3">
            <div className="card-header">
                <h3>{Props.userdata.name}</h3>
            </div>
            <div className="card-body">
                <p>{Props.userdata.email}</p>
                <p>Address {Props.userdata.address.street} {Props.userdata.address.suite} {Props.userdata.address.city} {Props.userdata.address.zipcode}</p>
                <strong>Contact Details</strong>
                <p>{Props.userdata.phone}, {Props.userdata.email}</p>
                <strong>Company Details</strong>
                <p>{Props.userdata.company.name} {Props.userdata.company.catchPhrase} {Props.userdata.company.bs}</p>
            </div>
        </div>
    </>
}

export default User;