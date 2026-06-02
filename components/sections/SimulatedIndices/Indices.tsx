import React from 'react'
import { LangProps } from '../../../types/common'
import Image from 'next/image'
import Spreads from '../partials/Spreads'
import MenuSimulated from '../partials/MenuSimulated'

export default function Indices({ lang }: LangProps) {
    return (
        <section className="symbols">
            <div className="container">
                <MenuSimulated lang={lang} />
                <div className="symbols__content currencies__content">
                    <Spreads />
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Simulated Indices</h4>
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
                            <div className="table__scroll">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th className="center">Contract<br />Size</th>
                                            <th className="center">Margin Percent<br />Leverage Normal</th>
                                            <th>Commission Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(SP500)</strong> S&P 500 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(NQ100)</strong> Nasdaq 100 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(DJI30)</strong> Dow Jones Industrial Average Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_jp.png" width="22" height="22" alt="Japan" /> <strong>(JP225)</strong> Nikkei 225 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_spain2.png" width="22" height="22" alt="Spain" /> <strong>(IBEX35)</strong> Spain 35 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_hongkong.png" width="22" height="22" alt="Hong Kong" /> <strong>(HSI50)</strong> Hong Kong 50 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(FTSE100)</strong> FTSE 100 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_dow.png" width="22" height="22" alt="Dow" /> <strong>(ESTOXX50)</strong> Dow Jones EURO STOXX50 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_xetra.png" width="22" height="22" alt="Spain" /> <strong>(DAX40)</strong> Xetra DAX Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_pycc.png" width="22" height="22" alt="CAC" /> <strong>(CAC40)</strong> CAC40 Index</td>
                                            <td className="center">1</td>
                                            <td className="center">Detail Trading Platform</td>
                                            <td>Volume per Trade</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div className="blog__pagination">
                                <p className="txt">Showing 1 to 15 of 1,061 entries</p>
                                <ul className="pagination">
                                    <li className="active"><a href="#">1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="table__frame payouts__performance">
                        <div className="head">
                            <h4>Hour</h4>
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
                            <div className="table__scroll">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th className="center">Sever Time</th>
                                            <th className="center">Weekday</th>
                                            <th className="right">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_xetra.png" width="22" height="22" alt="Spain" /> <strong>(DAX40)</strong> Xetra DAX Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(ESTOXX50)</strong> Dow Jones EURO STOXX50 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_jp.png" width="22" height="22" alt="Japan" /> <strong>(ESTOXX50)</strong> Dow Jones EURO STOXX50 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(DJI30)</strong> Dow Jones Industrial Average Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(NQ100)</strong> Nasdaq 100 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_us.png" width="22" height="22" alt="US" /> <strong>(SP500)</strong> S&P 500 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_pycc.png" width="22" height="22" alt="Pycc" /> <strong>(CAC40)</strong> CAC40 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_hongkong.png" width="22" height="22" alt="Hong Kong" /> <strong>(HSI50)</strong> Hong Kong 50 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_dow.png" width="22" height="22" alt="Dow" /> <strong>(ESTOXX50)</strong> Dow Jones EURO STOXX50 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
                                        </tr>
                                        <tr>
                                            <td><Image loading="lazy" src="/images/flag_dow.png" width="22" height="22" alt="Dow" /> <strong>(ESTOXX50)</strong> Dow Jones EURO STOXX50 Index</td>
                                            <td className="center">GMT +3</td>
                                            <td className="center">Monday - Friday</td>
                                            <td className="right">01:05 - 23:55 Sever Time</td>
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
