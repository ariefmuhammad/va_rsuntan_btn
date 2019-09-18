import React, { Component } from 'react';

class Footer extends Component {
    render() {
        return (
                <div className="app-footer">
                    <div className="app-footer__inner">
                        <div className="app-footer-left">
                            <ul className="nav">
                                <li className="nav-item">
                                    <a href="javascript:void(0);" className="nav-link">
                                        Rumah Sakit Universitas Tanjungpura Pontianak
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a href="javascript:void(0);" className="nav-link">
                                        Bank BTN
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div className="app-footer-right">
                            <ul className="nav">
                                <li className="nav-item">
                                    <a href="javascript:void(0);" className="nav-link">
                                        Copyright-2020
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a href="javascript:void(0);" className="nav-link">
                                        <div className="badge badge-success mr-1 ml-0">
                                            <small>IT</small>
                                        </div>
                                        RSUNTAN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        );
    }
}

export default Footer;
