SELECT [side].[uniqueid], 
       [base].[value], 
       [base].[userid], 
       [base].[organizationid], 
       [base].[name], 
       [base].[modified], 
       [base].[created], 
       [base].[itemid], 
       [base].[appcode], 
       [base].[privacy], 
       [side].[sync_row_is_tombstone], 
       [side].[local_update_peer_timestamp] AS sync_row_timestamp, 
       CASE 
         WHEN ( [side].[update_scope_local_id] IS NULL 
                 OR [side].[update_scope_local_id] <> @sync_scope_local_id ) 
       THEN 
         COALESCE([side].[restore_timestamp], 
         [side].[local_update_peer_timestamp]) 
         ELSE [side].[scope_update_peer_timestamp] 
       END                                  AS sync_update_peer_timestamp, 
       CASE 
         WHEN ( [side].[update_scope_local_id] IS NULL 
                 OR [side].[update_scope_local_id] <> @sync_scope_local_id ) 
       THEN 
           CASE 
             WHEN ( [side].[local_update_peer_key] > @sync_scope_restore_count ) 
           THEN 
             @sync_scope_restore_count 
             ELSE [side].[local_update_peer_key] 
           END 
         ELSE [side].[scope_update_peer_key] 
       END                                  AS sync_update_peer_key, 
       CASE 
         WHEN ( [side].[create_scope_local_id] IS NULL 
                 OR [side].[create_scope_local_id] <> @sync_scope_local_id ) 
       THEN 
         [side].[local_create_peer_timestamp] 
         ELSE [side].[scope_create_peer_timestamp] 
       END                                  AS sync_create_peer_timestamp, 
       CASE 
         WHEN ( [side].[create_scope_local_id] IS NULL 
                 OR [side].[create_scope_local_id] <> @sync_scope_local_id ) 
       THEN 
           CASE 
             WHEN ( [side].[local_create_peer_key] > @sync_scope_restore_count ) 
           THEN 
             @sync_scope_restore_count 
             ELSE [side].[local_create_peer_key] 
           END 
         ELSE [side].[scope_create_peer_key] 
       END                                  AS sync_create_peer_key 
FROM   [itemuserdata] [base] 
       RIGHT JOIN [itemuserdata_tracking] [side] 
               ON [base].[uniqueid] = [side].[uniqueid] 
WHERE  [side].[uniqueid] = @P_1 