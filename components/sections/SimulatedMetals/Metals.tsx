import React from 'react'
import Spreads from '../partials/Spreads'
import MenuSimulated from '../partials/MenuSimulated'
import { LangProps } from '../../../types/common'

export default function Metals({lang}: LangProps) {
    return (
        <section className="symbols">
            <div className="container">
                <MenuSimulated lang={lang} />
                <div className="symbols__content currencies__content">
                    <Spreads />
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Simulated Energies</h4>
                            <div className="inputs custom_inputs">
                                <div className="limit">
                                    <select name="" id="">
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div className="search">
                                    <input type="text" placeholder="Search..." />
                                </div>
                            </div>
                        </div>
                        <div className="table__content">
                            <div className="table__scroll col5">
                                <table>
                                    <thead>
                                        <tr>
                                            <th className="text-left">Simulated Symbols</th>
                                            <th className="text-left">Category</th>
                                            <th className="text-center">Contract Size</th>
                                            <th className="text-center">Margin Percent<br />Leverage Normal</th>
                                            <th className="text-center">Commission Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" className="odd">
                                            <td className="name-symbol text-left"><span>( WTI )</span>US Crude Oil</td>
                                            <td className="text-left sorting_1">Oils </td>
                                            <td className="text-center">1000</td>
                                            <td className="text-center">Detail In Trading Platform</td>
                                            <td className="text-center">Volume per Trade</td>
                                        </tr>
                                        <tr role="row" className="even">
                                            <td className="name-symbol text-left"><span>( BRN )</span>UK Brent Crude Oil</td>
                                            <td className="text-left sorting_1">Oils </td>
                                            <td className="text-center">1000</td>
                                            <td className="text-center">Detail In Trading Platform</td>
                                            <td className="text-center">Volume per Trade</td>
                                        </tr>
                                        <tr role="row" className="odd">
                                            <td className="name-symbol text-left"><span>( XAUEUR )</span>Gold vs Euro</td>
                                            <td className="text-left sorting_1">Metals CFD </td>
                                            <td className="text-center">100</td>
                                            <td className="text-center">Detail In Trading Platform</td>
                                            <td className="text-center">Volume per Trade</td>
                                        </tr>
                                        <tr role="row" className="even">
                                            <td className="name-symbol text-left"><span>( XAGUSD )</span>Silver vs US Dollar</td>
                                            <td className="text-left sorting_1">Metals CFD </td>
                                            <td className="text-center">5000</td>
                                            <td className="text-center">Detail In Trading Platform</td>
                                            <td className="text-center">Volume per Trade</td>
                                        </tr>
                                        <tr role="row" className="odd">
                                            <td className="name-symbol text-left"><span>( XAUUSD )</span>Gold vs US Dollar</td>
                                            <td className="text-left sorting_1">Metals CFD </td>
                                            <td className="text-center">100</td>
                                            <td className="text-center">Detail In Trading Platform</td>
                                            <td className="text-center">Volume per Trade</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div className="blog__pagination">
                                <p className="txt">Showing 1 to 5 of 5 entries</p>
                            </div>
                        </div>
                    </div>
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Hour</h4>
                        </div>
                        <div className="table__content">
                            <div className="table__scroll col4">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Simulated Currencies</th>
                                            <th className="center">Weekday</th>
                                            <th className="center">Time</th>
                                            <th className="right">Sever Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>All</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="center">02:05 - 23:55</td>
                                            <td className="right">GMT +3</td>
                                        </tr>
                                        <tr>
                                            <td><strong>(BRN)</strong> BRN / UK Brent Crude Oil</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="center">03:05 - 23:55</td>
                                            <td className="right">GMT +3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}
