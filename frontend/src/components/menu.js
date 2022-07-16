import { Link, Outlet } from "react-router-dom";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faArrowTrendUp, faChartLine, faDoorOpen, faHouse, faTags } from '@fortawesome/free-solid-svg-icons'
function Menu() {
    return (
        <div className="flex flex-row h-screen">
            <div className="flex-col p-3 w-max text-white bg-slate-700 h-full">
                <div className="flex-row items-center rounded-lg p-3 hover:bg-sky-200 group">
                    <Link to="/" className="group-hover:text-slate-600">
                        <FontAwesomeIcon icon={faHouse} className="mr-2"/>
                        Accueil
                    </Link>
                </div>
                <div className="flex-row rounded-lg p-3 hover:bg-sky-200 group">
                    <Link to="investissement" className="group-hover:text-slate-700">
                        <FontAwesomeIcon icon={faArrowTrendUp} className="mr-2"/>
                        Mes investissements
                    </Link>
                </div>
                <div className="flex-row rounded-lg p-3 hover:bg-sky-200 group">
                    <Link to="categorie" className="group-hover:text-slate-700">
                        <FontAwesomeIcon icon={faTags} className="mr-2"/>
                        Categories
                    </Link>
                </div>
                <div className="flex-row rounded-lg p-3 hover:bg-sky-200 group">
                    <Link to="statistique" className="group-hover:text-slate-700">
                        <FontAwesomeIcon icon={faChartLine} className="mr-2"/>
                        Statistiques
                    </Link>
                </div>
                <div className="flex-row rounded-lg p-3 hover:bg-sky-200 group">
                    <a href="#" className="group-hover:text-slate-700">
                        <FontAwesomeIcon icon={faDoorOpen} className="mr-2"/>
                        Logout
                    </a>
                </div>
            </div>
            <div className="grow bg-gray-100">
                <Outlet />
            </div>
        </div>
    )
}

export default Menu;