create trigger tbi_annuler_absences before insert on creneaux
for each row
begin
	declare id_abs integer;

	declare cabsences cursor for 
		select a.v_id_abs
		from absences a
		where a.d_abs between new.d_date_debut and new.d_date_fin;

	open cabsences;

	labsences:loop
		fetch cabsences into id_abs;

		update absences a
		set a.v_statut = 'D'
		where a.v_id_abs = id_abs;
	end loop;

	close cabsences;
end;