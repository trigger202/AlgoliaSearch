import React, { Component } from "react";

class Search extends Component {
    constructor(props) {
        super(props);
        this.state = {
            search: "",
            actors: []
        };
        this.handleChange = this.handleChange.bind(this);
    }

    hasActors() {
        if (this.state.actors.length)
            return <p>{this.state.actors.length} matches found</p>;
        return "No matches found";
    }

    render() {
        return (
            <div className="Search">
                <h2>Search</h2>
                <div className="input-group">
                    <input
                        className="form-control"
                        name="actor"
                        onChange={this.handleChange}
                    />
                    <button
                        className="btn btn-success ml-2"
                        onClick={this.handleSearch.bind(this)}
                    >
                        Search
                    </button>
                </div>
                <div className="mt-5" />
                <div className="info">{this.hasActors()}</div>
                <div className="form-group">
                    <table className="table table-bordered">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>lastName Name</th>
                                <th>Email</th>
                                <th>Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.state.actors.map(actor => (
                                <tr key={actor.id}>
                                    <td>{actor.first_name}</td>
                                    <td>{actor.last_name}</td>
                                    <td>{actor.email}</td>
                                    <td>{actor.rating}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        );
    }

    handleSearch(e) {
        e.preventDefault();

        fetch("/search?actor=" + this.state.search)
            .then(res => res.json())
            .then(actors => {
                const result = actors.map(actor => actor);

                this.setState({
                    actors: result
                });
            });
    }

    handleChange(e) {
        this.setState({
            search: e.target.value
        });
    }
}

export default Search;
