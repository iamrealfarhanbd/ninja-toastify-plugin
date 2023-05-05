import React from "react";
import { Alert, Card } from "react-bootstrap";
import Dashboard from "./components/Dashboard";

const App = () => {
  return (
    <div>
      <Alert variant="warning" className="text-center">
        <Card.Header as="h2">Ninja Toastify</Card.Header>
      </Alert>
      <Dashboard />
    </div>
  );
};

export default App;
