// The right way to do it
$dsn = 'mysql://user:password@host/db';
$s->loadQuery($dsn,'SELECT flavor,id FROM ice_cream');
// The wrong way to do it:
$s->loadQuery('mysql://user:password@host/db','SELECT flavor,id FROM 
ice_cream');
