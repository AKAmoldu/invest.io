import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Menu from '../components/menu';
import { Category } from '../pages/category';
import Home from '../pages/home';
import Investment from '../pages/investment';
import Statistique from '../pages/statistique';

function Router() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path='/' element={<Menu />}>
                    <Route index element={<Home />} />
                    <Route path='/investissement' element={<Investment />} />
                    <Route path='/statistique' element={<Statistique />} />
                    <Route path='/categorie' element={<Category />} />
                </Route>
            </Routes>
        </BrowserRouter>
    )
}

export default Router;