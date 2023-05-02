import React from 'react'
// import { ToastContainer, toast } from 'react-toastify';
// import 'react-toastify/dist/ReactToastify.css';

const Dashboard = () => {
    const handleClick = () => {
        toast.success('Hello World!', {
          position: toast.POSITION.TOP_CENTER
        });
      };
    return (
        <div className='dashboard'>
            <div className="card">
                <h3>Dashboard</h3>
                <p>
                    Edit Dashboard component at <code>src/components/Dashboard.jsx</code>
                </p>
                <button onClick={handleClick}>Click Me</button>
                {/* <ToastContainer /> */}
            </div>
        </div>
     );
}

export default Dashboard;