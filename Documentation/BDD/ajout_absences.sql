delimiter |

create procedure ajouter_absences()
begin
	declare done 		integer default false;
	declare carte_etu 	varchar(14);
	declare id_etu 		varchar(8);
	declare groupe_etu 	integer;

	declare nb_emarg, 
			nb_creneaux,
			nb_absences integer;


	declare cetudiants cursor for 
		select v_id_etu, v_id_carte, v_id_groupe
		from etudiants
		where v_statut <> 'D';
  	declare continue handler for not found set done = true;

	-- Si on est ni Samedi ni Dimanche
	if weekday(curdate()) != 5 and weekday(curdate()) != 6 then

		open cetudiants;

		letudiants:loop
			fetch cetudiants into id_etu, carte_etu, groupe_etu;

			if done then
				leave letudiants;
			end if;

			select count(*) into nb_creneaux 
			from creneaux c
			where date(c.d_date_debut) = curdate()
			and maketime(9,0,0) between time(c.d_date_debut) and time(c.d_date_fin)
			and c.v_id_groupe = groupe_etu
			and c.v_statut <> 'D';

			select count(*) into nb_emarg
			from emargements e 
			where date(e.d_date_emarg) = curdate()
			and time(e.d_date_emarg) between maketime(8,0,0) and maketime(10,15,0)
			and e.v_id_carte = carte_etu
			and nb_creneaux = 0
			and e.v_statut <> 'D';

			select count(*) into nb_absences
			from absences a
			where a.v_id_etu = id_etu
			and a.d_abs = concat(curdate(), ' 09:15:00')
			and a.v_statut <> 'D';

			if nb_emarg = 0 and nb_creneaux = 0 and nb_absences = 0 then
				insert into absences(v_id_etu, d_abs)
				values(id_etu, concat(curdate(), ' 09:15:00'));
			end if;

			select count(*) into nb_creneaux 
			from creneaux c
			where date(c.d_date_debut) = curdate()
			and maketime(9,0,0) between time(c.d_date_debut) and time(c.d_date_fin)
			and c.v_id_groupe = groupe_etu
			and c.v_statut <> 'D';

			select count(*) into nb_emarg
			from emargements e 
			where date(e.d_date_emarg) = curdate()
			and time(e.d_date_emarg) between maketime(10,15,0) and maketime(12,30,0)
			and e.v_id_carte = carte_etu
			and nb_creneaux = 0
			and e.v_statut <> 'D';

			select count(*) into nb_absences
			from absences a
			where a.v_id_etu = id_etu
			and a.d_abs = concat(curdate(), ' 11:30:00')
			and a.v_statut <> 'D';

			if nb_emarg = 0 and nb_creneaux = 0 and nb_absences = 0 then
				insert into absences(v_id_etu, d_abs)
				values(id_etu, concat(curdate(), ' 11:30:00'));
			end if;

			select count(*) into nb_creneaux 
			from creneaux c
			where date(c.d_date_debut) = curdate()
			and maketime(9,0,0) between time(c.d_date_debut) and time(c.d_date_fin)
			and c.v_id_groupe = groupe_etu
			and c.v_statut <> 'D';

			select count(*) into nb_emarg
			from emargements e 
			where date(e.d_date_emarg) = curdate()
			and time(e.d_date_emarg) between maketime(13,45,0) and maketime(16,00,0)
			and e.v_id_carte = carte_etu
			and nb_creneaux = 0
			and e.v_statut <> 'D';

			select count(*) into nb_absences
			from absences a
			where a.v_id_etu = id_etu
			and a.d_abs = concat(curdate(), ' 15:00:00')
			and a.v_statut <> 'D';

			if nb_emarg = 0 and nb_creneaux = 0 and nb_absences = 0 then
				insert into absences(v_id_etu, d_abs)
				values(id_etu, concat(curdate(), ' 15:00:00'));
			end if;

			select count(*) into nb_creneaux 
			from creneaux c
			where date(c.d_date_debut) = curdate()
			and maketime(9,0,0) between time(c.d_date_debut) and time(c.d_date_fin)
			and c.v_id_groupe = groupe_etu
			and c.v_statut <> 'D';

			select count(*) into nb_emarg
			from emargements e 
			where date(e.d_date_emarg) = curdate()
			and time(e.d_date_emarg) between maketime(16,0,0) and maketime(18,15,0)
			and e.v_id_carte = carte_etu
			and nb_creneaux = 0
			and e.v_statut <> 'D';

			select count(*) into nb_absences
			from absences a
			where a.v_id_etu = id_etu
			and a.d_abs = concat(curdate(), ' 17:15:00')
			and a.v_statut <> 'D';

			if nb_emarg = 0 and nb_creneaux = 0 and nb_absences = 0 then
				insert into absences(v_id_etu, d_abs)
				values(id_etu, concat(curdate(), ' 17:15:00'));
			end if;

		end loop;

		close cetudiants;
	end if;
end|