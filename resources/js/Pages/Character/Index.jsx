import NavLink from "@/Components/NavLink";
import TextInput from "@/Components/TextInput";
import { Link, router } from "@inertiajs/react";


export default function Index({auth, characters, queryParams = null}) {
    /**
     * This is used to store the query parameters for the search
     */
    queryParams = queryParams || {};
    const searchFieldChanged = (name, value) => {
        if(value) {
            queryParams[name] = value;
        }
        else {
            delete queryParams[name];
        }
        
        /**
         * Convert array to object
         */
        queryParams = Object.assign({}, queryParams);
        router.get('characters', queryParams);
    };

    /**
     * This function is used to handle the key press event
     * 
     * @param {string} name 
     * @param {Event} e 
     * @returns {void}
     */
    const onKeyPress = (name, e) => {
        searchFieldChanged(name, e.target.value);
    };

    const store = (e) => {
        const {data, setData, post, errors, reset} = useForm({
            character_id: '',
            name: '',
            character_url: '',
            gender: '',
            birth_year: ''
        });

        const onSubmit = (e) => {
            e.preventDefault();
            post(route("favorites.store"));
        };
    };

    return (
        <>
            <TextInput 
                name="search" 
                placeholder="Search" 
                defaultValue={queryParams.name || ''}
                onKeyUp={(e) => onKeyPress('name', e)}
            />
            <NavLink href={route('characters.index')} active={route().current('characters.index')}>
            Characters
            </NavLink>
            {/* <NavLink href={route('favorites')} active={route().current('dashboard')}>
                Favorites
            </NavLink> */}
            <table className="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead className="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 border-b-2 border-gray-500">
                    <tr className="text-nowrap">
                        <th className="px-3 py-2">Name</th>
                        <th className="px-3 py-2">Gender</th>
                        <th className="px-3 py-2">Birth Year</th>
                        <th className="px-3 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {characters.results.map(character => (
                        <tr key={character.id}>
                            <td className="px-3 py-3">{character.name}</td>
                            <td className="px-3 py-3">{character.gender}</td>
                            <td className="px-3 py-3">{character.birth_year}</td>
                            <td className="px-3 py-3">
                                <Link
                                    className="bg-emerald-500 py-1 px-3 text-white rounded shadow transition-all" 
                                    href={route('favorites.store')}>
                                    Favorite
                                </Link>
                            </td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </>
    );
}