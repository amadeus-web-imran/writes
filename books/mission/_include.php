<?php
if (getPageParameterAt() == 'read' && getQueryParameter('content'))
	addStyle('print', COREASSETS);
