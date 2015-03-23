- Path: /name/add
- Path Regex: #^/name/add$#s
- Host: localhost
<<<<<<< HEAD
- Host Regex: #^localhost$#si
=======
- Host Regex: #^localhost$#s
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
- Scheme: http|https
- Method: PUT|POST
- Class: Symfony\Component\Routing\Route
- Defaults: NONE
- Requirements: NO CUSTOM
- Options: 
    - `compiler_class`: Symfony\Component\Routing\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2
